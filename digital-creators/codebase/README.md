# Digital Creators

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Perform the below in the root of your Laravel project directory.

Install all the dependencies using composer

    composer install

Install NPM dependencies

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Import the PostgresSQL file, found in the .zip file, into a local database. 

Update your database connection details in `.env`.

Link assets from storage

    php artisan storage:link

Start the local development server

    php artisan serve

You can now access the server at http://127.0.0.1:8000

----------
