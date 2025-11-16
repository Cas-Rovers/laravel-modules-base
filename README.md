# Laravel Modules Base

This project serves as a base-project (for now) for building modular Laravel applications using a clean and organized module-based
architecture.

## Features

- Module-based structure for better code organization.
- Clean and maintainable architecture.
## Installation

1. Clone this repository.
2. Run `composer install`.
3. Configure your `.env` file.
4. Run `php artisan migrate`.

## Usage

Each module follows the following structure (Not done yet, may change in the future):
```aiignore
modules/
 ├── Module-1/
 │    ├── app/
 │    │    ├── Http/
 │    │    │    ├── Controllers/
 │    │    │    ├── Middleware/
 │    │    │    └── Requests/
 │    │    ├── Models/
 │    │    │    └── Model.php
 │    │    └── Providers/
 │    │         └── XXXServiceProvider.php
 │    ├── config/
 │    │    └── config.php
 │    ├── database/
 │    │    ├── factories/
 │    │    ├── migrations/
 │    │    └── seeders/
 │    ├── resources/
 │    │    ├── assets/
 │    │    └── views/
 │    ├── routes/
 │    │    ├── web.php
 │    │    └── api.php
 │    ├── tests/
 │    │    ├── Feature/
 │    │    ├── Unit/
 │    │    ├── Pest.php
 │    │    └── TestCase.php
 │    ├── .gitignore.json
 │    ├── composer.json
 │    ├── package.json
 │    ├── module.json
 │    ├── README.md
 │    └── vite.config.js
```
