from fastapi import FastAPI
from app.api.auth import auth
from app.api.db import metadata, database, engine

app = FastAPI(openapi_url="/api/v1/auth/openapi.json", docs_url="/api/v1/auth/docs")

@app.on_event("startup")
async def startup():
    await database.connect()
    metadata.create_all(engine)

@app.on_event("shutdown")
async def shutdown():
    await database.disconnect()

app.include_router(auth, prefix="/api/v1/auth", tags=["auth"])
