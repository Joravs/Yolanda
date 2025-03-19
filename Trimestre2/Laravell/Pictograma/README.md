<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Facilito comandos para que el proyecto se ejecute bien
cp .env.example .env
composer install
php artisan key:generate
## Migrations, al ejecutar directamente este comando, lanza una pregunta para crear la base de datos si no existe.
php artisan migrate
php artisan db:seed