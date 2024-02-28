# JobConnect
JobConnect is a web application built with Laravel, aimed at facilitating job search and application processes. It provides a platform where users can search for job offers by domain and location and apply for suitable positions. Additionally, company representatives can publish job offers on behalf of their companies.

## Features
### Job Search: Users can search for job offers based on domain and location preferences.
### Job Application: Users can apply for job offers directly through the platform.
### Job Offer Publication: Company representatives can publish job offers for their companies.
### Authentication: Authentication is implemented using Laravel Breeze, providing secure user registration and login functionality.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Installation
### Clone the repository:

git clone https://github.com/your-username/JobConnect.git

### Navigate to the project directory:
cd JobConnect

### Install PHP dependencies using Composer:
composer install

### Install JavaScript dependencies using npm or Yarn:
npm install

### or
yarn

### Set up your environment variables by copying the .env.example file:
cp .env.example .env

### Then, generate an application key:
php artisan key:generate

### Configure your database connection in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=job_connect
DB_USERNAME=root
DB_PASSWORD=

Replace the database connection details with your own.

### Run database migrations:
php artisan migrate

### Compile front-end assets:

npm run dev

### Serve the application:

php artisan serve

## You can now access the application at http://localhost:8000.


### Contributing
Contributions are welcome!

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
