export DATABASE_URL=postgresql://postgres:secretpass@localhost/movie_db
export CAST_SERVICE_HOST_URL=http://localhost:8002/api/v1/casts/
uvicorn app.main:app --reload
