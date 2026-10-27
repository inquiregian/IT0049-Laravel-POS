# Laravel POS — IT0049

A Laravel project for IT0049 Technical Formative Assessments 5 and 6. It demonstrates Laravel routing, controllers, Blade views, database migrations, Eloquent models, and seeders through a simple POS interface.

## Project features

- Home and About pages
- Customer Accounts page that displays customer records from the database
- User Accounts page that displays user records from the database
- Sample records added through a database seeder
- Responsive page layout

The current assessment scope focuses on the pages and database features listed above. Sales processing and inventory management are not included.

## Pages

| Page | Route | Description |
|---|---|---|
| Home | `/` | Project welcome page |
| About | `/about` | Project overview |
| Customers | `/customers` | Lists customer accounts |
| Users | `/users` | Lists user accounts |

## Technology

- PHP 8.2 or newer
- Laravel 12
- SQLite
- Blade templates
- Eloquent ORM

## Database tables

- `customers` stores each customer's full name, email, and phone number.
- `users` stores each account's unique username and full name.

The `PosSeeder` creates five sample customers and five sample user accounts.

## Requirements

Install PHP 8.2 or newer with the PDO SQLite extension, and Composer.

## Local setup on Windows

Clone the repository and install its Composer dependencies:

```powershell
git clone https://github.com/inquiregian/IT0049-Laravel-POS.git
cd IT0049-Laravel-POS
composer install
Copy-Item .env.example .env
php artisan key:generate