#!/bin/bash

psql -v ON_ERROR_STOP=1 --username "${POSTGRES_USER}" --dbname "${POSTGRES_DB}" <<-EOSQL

    CREATE SCHEMA application;

    CREATE USER app_user WITH PASSWORD '${DB_APP_USER_PASSWORD}';
    CREATE USER manager WITH PASSWORD '${DB_MANAGER_PASSWORD}';

    GRANT USAGE ON SCHEMA application TO app_user;
    GRANT ALL PRIVILEGES ON SCHEMA application TO manager;

    ALTER ROLE app_user SET search_path TO application;
    ALTER ROLE manager SET search_path TO application;

EOSQL
