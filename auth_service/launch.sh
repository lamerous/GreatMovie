export DATABASE_URL=postgresql://postgres:secretpass@localhost/user_db
export JWT_SECRET=TEST
uvicorn app.main:app --reload
