from app.api.models import AuthLoginIn, AuthRegisterIn
from app.api.db import users, database

async def add_user(payload: AuthRegisterIn):
    query = users.insert().values(**payload.dict()) 
    return await database.execute(query=query)

async def get_user(id: int):
    query = users.select().where(users.c.id==id)
    return await database.fetch_one(query=query)

async def get_user_by_name(username: str):
    query = users.select().where(users.c.username==username)
    return await database.fetch_one(query=query)
