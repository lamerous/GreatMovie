from sqlalchemy import (Column, Integer, BigInteger, Float, Date, MetaData, String, Table, create_engine, ARRAY)
from databases import Database

from os import getenv

DATABASE_URL = getenv('DATABASE_URL')

engine = create_engine(DATABASE_URL)
metadata = MetaData()

movies = Table(
    'movies',
    metadata,
    Column('id', Integer, primary_key=True),
    Column('name', String(64)),
    Column('plot', String(255)),
    Column('main_genre', String(64)),
    Column('genres', ARRAY(String)),
    Column('casts_id', ARRAY(Integer)),
    Column('director_id', ARRAY(Integer)),
    Column('writers_id', ARRAY(Integer)),
    Column('poster', String(255)),
    Column('rating', Float),
    Column('vote_count', Integer),          
    Column('year', Integer),
    Column('release_date', Date),
    Column('country', String(64)),
    Column('language', ARRAY(String)),
    Column('duration', Float),
    Column('mpa_rating', String(16)),
    Column('imdb_id', String(32)),
    Column('tmdb_id', Integer),
    Column('budget', BigInteger),
    Column('revenue', BigInteger),
    Column('keywords', ARRAY(String)),
    Column('popularity', Float)
)

database = Database(DATABASE_URL)
