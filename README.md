docker-compose up -d
docker exec -it hw15adv_php-apache_1 bash
php artisan key:generate
php artisan migrate:fresh --seed

DB_HOST=mysql
DB_PASSWORD=secret
