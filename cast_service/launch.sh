export DATABASE_URL=postgresql://postgres:secretpass@localhost/cast_db
uvicorn app.main:app --port 8002 --reload
