## Up the services
docker-compose up -d

## Go to the container
docker exec -it hw15adv_php-apache_1 bash

## Run inside the container
php artisan migrate:fresh --seed  
cp .env.example .env

## Down services if you are exit
docker-compose down  
