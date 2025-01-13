# Library App

## Instalation

1. Create the .env file with your environment parameters (.env.example has de default values)

2. Install dependencies (if in Windows execute with WSL)


    docker run --rm -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs

3. Run the containers 
   

    docker compose up -d --wait


4. Initialize DB


    docker exec -it library-app-laravel.test-1 sh -c "php artisan migrate"
   
    docker exec -it library-app-laravel.test-1 sh -c "php artisan db:seed"

5. Install npm


    docker exec -it library-app-laravel.test-1 sh -c "npm install"

6. Build assets


    docker exec -it library-app-laravel.test-1 sh -c "npm run build"


Access from `http://localhost`

To stop and remove the containers 

    docker compose down --remove-orphans


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
