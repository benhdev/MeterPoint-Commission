# Project Instructions

I decided to use Laravel Lumen for this project, mainly because I love Laravel and Lumen is a simplified, lightweight version of it made specifically for microservices or APIs. The majority of the important code can be found within [`app/Http/Controllers/CommissionController`](app/Http/Controllers/CommissionController)

The models for interaction within the database can be found within [`app/Models`](app/Models) and the database migrations & seeders can be found within [`database/migrations`](database/migrations) and [`database/seeders`](database/seeders)

1. I used Laravel Valet for my local environment, if you don't have this I'd highly recommend installing & using it :)

2. You'll need to set up the database and get a bit of sample data in there.
    - `php artisan migrate`
    - `php artisan db:seed`

3. Calling the API endpoint in Postman, using Laravel Valet environment
    - API URL: `http://gulf.test/commission`
    - Method: `POST`
    - Body:

    ```
        { "partner": "Ben" }
    ```

    OR

    ```
        { "partner": "Ben", "meterpoint": 1 }
    ```

    OR

    ```
        { "partner": "Ben", "meterpoint": 2 }
    ```

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
