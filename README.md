## Workout Tracker

By Romano Garcia

Steps:

Clone the repository
- git clone https://github.com/romanogarcia/workout-tracker.git

Create the env file and add your user and db password
- cp .env.example .env

Update/install the vendor folder
- composer update

Generate new key
- php artisan key:generate

Run migration 
- php artisan migrate

Run DB seed
- php artisan db:seed

Run server
- php artisan serve




***** Version 2 Instructions ****** 

Update your local branch
- git pull

Run the update composer to install the require package
- composer require doctrine/dbal

Run migration again
- php artisan migrate

Refresh the migration and seeds
- php artisan migrate:refresh --seed

Run server again
- php artisan serve
