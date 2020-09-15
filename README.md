## Workout Tracker

By Romano Garcia
Steps:

Clone the repository
- git clone https://github.com/romanogarcia/workout-tracker.git

Create the env file
- cp .env.example .env

Update/install the vendor folder
- composer update

Generate new key
- php artisan key:generate

Run migration 
- php artisan migrate

Run DB seed
- php artisan db:seed