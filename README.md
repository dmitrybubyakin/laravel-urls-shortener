# Laravel Url Shortener

A simple url shortener for Laravel.

## Installation

This package can be installed via composer using this command:

```
composer require dmitrybubyakin/laravel-urls-shortener
```

You can publish the migration and the config file with:

```
php artisan vendor:publish
```

Add the following in the `web.php` file:

```php
Shortener::routes();
```

## Usage

```php
Shortener::getShortUrl('https://google.com')

// or you can use a helper
shorten('https://google.com')
```

