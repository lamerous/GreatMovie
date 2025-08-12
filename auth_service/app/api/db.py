from sqlalchemy import (Column, Integer, MetaData, String, Boolean, Table, create_engine)
from databases import Database

from os import getenv

DATABASE_URL = getenv("DATABASE_URL")

engine = create_engine(DATABASE_URL)
metadata = MetaData()

users = Table(
   'users',
   metadata,
   Column('id', Integer, primary_key=True),
   Column('username', String(24)),
   Column('password', String(64)),
   Column('role', String(24)),
   Column('email', String(64)),
   Column('logedout', Boolean)
)

database = Database(DATABASE_URL)
