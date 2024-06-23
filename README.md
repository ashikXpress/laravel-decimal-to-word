# Laravel Ashik Decimal To Word

A Laravel package to convert decimals to words in BDT (Bangladeshi Taka) format.

## Installation

You can install the package via Composer:

```bash
composer require ashik/laravel-decimal-to-word

Laravel Compatibility
For Laravel 5.5 or above: The package will automatically register its service provider and facade.

For Laravel below 5.5: Follow these steps to manually register the service provider and facade:

Add the service provider to the providers array in config/app.php:

php
Copy code
'providers' => [
    // Other Service Providers
    Ashik\DecimalToWord\DecimalToWordServiceProvider::class,
];
Add the facade to the aliases array in config/app.php:

php
Copy code
'aliases' => [
    // Other Facades
    'DecimalToWord' => Ashik\DecimalToWord\Facades\DecimalToWord::class,
];