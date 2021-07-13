run containers
````cmd
    docker-compose up -d 
````

run server
````cmd
    docker-compose run -p 8000:8000 -d --rm php php artisan serve --host=0.0.0.0
````