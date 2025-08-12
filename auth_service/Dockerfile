FROM python:3.13-slim

#ENV DATABASE_URL=postgresql://postgres:secretpass@localhost/movie_db
#ENV CAST_SERVICE_HOST_URL=http://localhost:8002/api/v1/casts/

WORKDIR /app

COPY . .

RUN apt-get update \
    && apt-get install -y \
    gcc \
    python3-dev \
    libpq-dev \
    build-essential \
    libuv1-dev \
    && apt-get clean

RUN pip install --no-cache-dir -U pip setuptools wheel && \
	pip install --no-cache-dir -r requirements.txt

#CMD ["uvicorn", "app.main:app", "--host", "0.0.0.0", "--port", "8000", "--reload"]

