from typing import List
from fastapi import Header, APIRouter, HTTPException, Response, Request

from app.api.models import * 
from app.api import db_manager

import jwt, bcrypt
from datetime import datetime, timedelta
from os import getenv

auth = APIRouter()

def generate_jwt(user_id: int, role: str) -> str:
    return jwt.encode(
        payload={
            'sub': str(user_id), 
            "role": role,
            "exp": datetime.utcnow() + timedelta(minutes=15) 
        }, 
        key=getenv("JWT_SECRET"),
        algorithm="HS256"
    )

def hash_password(password: str) -> str:
   salt = bcrypt.gensalt()
   hashed = bcrypt.hashpw(password.encode(), salt)
   return hashed.decode()

def verify_password(plain: str, hashed: str) -> bool:
    return bcrypt.checkpw(plain.encode(), hashed.encode())


@auth.post('/login', response_model=AuthOut)
async def login(payload: AuthLoginIn, response: Response):
    user = await db_manager.get_user_by_name(payload.username)  
    
    if not user or not verify_password(payload.password, user['password']):
        raise HTTPException(status_code=401, detail="Invalid credentials")

    access_token = generate_jwt(user['id'], user['role'])
    response.set_cookie(
        key="access_token",
        value=access_token,
        httponly=True,
        secure=False,   # ЗАМЕНИТЬ НА TRUE
        samesite="lax",
        max_age=15*60
    )

    return {"message": "Logged In", "user_id": user['id']}

@auth.post('/register', response_model=AuthOut, status_code=201)
async def register(payload: AuthRegisterIn):
    user = await db_manager.get_user_by_name(payload.username)
    if user:
        raise HTTPException(status_code=409, detail="User already exists")

    payload.password = hash_password(payload.password)
    payload.role = "user"

    user_id = await db_manager.add_user(payload)

    response = {
        'message': "User Created",
        'user_id': user_id,
    }

    return response

@auth.get('/get_current_user', response_model=UserDataOut)
async def get_current_user(request: Request):
    access_token = request.cookies.get("access_token")

    if not access_token :
        raise HTTPException(status_code=401, detail="Not authorized")

    try:
        payload = jwt.decode(access_token, getenv("JWT_SECRET"), algorithms=["HS256"])
        user_id = int(payload.get("sub"))

        if not user_id:
            raise HTTPException(status_code=401, detail="Invalid Token")

        user = await db_manager.get_user(user_id)
        if not user:
            raise HTTPException(status_code=404, detail="User not found")

        response = {
                'id': user['id'],
                'username': user['username'],
                'email': user['email'],
                'role': user['role'],
        }

        return response

    except jwt.ExpiredSignatureError as err:
        print(err)
        raise HTTPException(status_code=401, detail="Token expired")

    except jwt.PyJWTError as err:
        print(err)
        raise HTTPException(status_code=401, detail="Invalid token")

@auth.post('/logout', response_model=LogoutOut)
async def logout(id: int):
    return {"message:" "Logged Out"}
