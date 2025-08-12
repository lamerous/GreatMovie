from typing import List, Optional
from pydantic import BaseModel
from datetime import date

class MovieIn(BaseModel):
    name: str
    plot: str
    main_genre: str
    genres: List[str]
    casts_id: List[int]
    director_id: List[int]
    writers_id: List[int]
    poster: str
    rating: float
    vote_count: int
    year: int
    release_date: date
    country: str
    language: List[str]
    duration: float
    mpa_rating: str
    imdb_id: str
    tmdb_id: int
    budget: int
    revenue: int
    keywords: List[str]
    popularity: float

class MovieOut(MovieIn):
    id: int

class MovieUpdate(BaseModel):
    name: Optional[str] = None
    plot: Optional[str] = None
    main_genre: Optional[str] = None
    genres: Optional[List[str]] = None
    casts_id: Optional[List[int]] = None
    director_id: Optional[List[int]] = None
    writers_id: Optional[List[int]] = None
    poster: Optional[str] = None
    rating: Optional[float] = None
    vote_count: Optional[int] = None
    year: Optional[int] = None
    release_date: Optional[date] = None
    country: Optional[str] = None
    language: Optional[List[str]] = None
    duration: Optional[float] = None
    mpa_rating: Optional[str] = None
    imdb_id: Optional[str] = None
    tmdb_id: Optional[int] = None
    budget: Optional[int] = None
    revenue: Optional[int] = None
    keywords: Optional[List[str]] = None
    popularity: Optional[float] = None
