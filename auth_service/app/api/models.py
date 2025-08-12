from pydantic import BaseModel, Field

class AuthLoginIn(BaseModel):
    username: str
    password: str

class AuthRegisterIn(BaseModel):
    username: str = Field(max_length=24)
    password: str = Field(min_length=8, max_length=64)
    role: str
    email: str

class UserDataOut(BaseModel):
    id: int
    username: str
    email: str
    role: str

class AuthOut(BaseModel):
    message: str
    user_id: int

class LogoutOut(BaseModel):
    message: str = "Logged Out"
