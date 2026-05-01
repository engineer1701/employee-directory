# Employee Directory

An employee directory built using Laravel with Blade template layouts. Includes add, edit and delete operations.

## Setup Instructions

1. Open XAMPP and start Apache and MySQL
2. Open cmd and go to project folder
3. Run: composer install
4. Run: php artisan key:generate
5. Run: php artisan migrate
6. Run: php artisan serve
7. Open browser and go to: http://localhost:8000/employees

## Database Configuration

1. Open http://localhost/phpmyadmin
2. Create a new database named: employee_db
3. Open .env file and set:
   DB_DATABASE=employee_db
   DB_USERNAME=root
   DB_PASSWORD=

## Features

- Employee listing page with Blade layout
- Add new employee with form validation
- Edit employee details
- Delete employee records
- Navigation bar using Blade layouts

## Technologies Used

- Laravel 10
- MySQL
- Blade Template Engine
- XAMPP