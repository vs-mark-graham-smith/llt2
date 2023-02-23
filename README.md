# Set up instructions

## Clone and move into the project
`git clone git@github.com:vs-mark-graham-smith/llt2.git`
`cd llt2`

## Create .env from .env.example, and replace DB_DATABASE, DB_USERNAME and DB_PASSWORD
```
DB_DATBASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

## Start up container
`docker-compose up -d`

## Run composer install inside container
`docker-compose exec web composer install`

## Generate keys
`docker-compose exec web php artisan key:generate`

## Migrate tables
`docker-compose exec web php artisan migrate`

## Visit project at http://localhost:8000/

