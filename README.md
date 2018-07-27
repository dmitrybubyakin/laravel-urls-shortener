# Laravel Url Shortener

[![Latest Version](https://img.shields.io/github/release/dmitrybubyakin/laravel-urls-shortener.svg?style=flat-square)](https://github.com/dmitrybubyakin/laravel-urls-shortener/releases)
[![GitHub license](https://img.shields.io/github/license/dmitrybubyakin/laravel-urls-shortener.svg?style=flat-square)](https://github.com/dmitrybubyakin/laravel-urls-shortener/blob/master/LICENSE.md)
[![Build Status](https://travis-ci.org/dmitrybubyakin/laravel-urls-shortener.svg?branch=master)](https://travis-ci.org/dmitrybubyakin/laravel-urls-shortener)
[![Quality Score](https://img.shields.io/scrutinizer/g/dmitrybubyakin/laravel-urls-shortener.svg?style=flat-square)](https://scrutinizer-ci.com/g/dmitrybubyakin/laravel-urls-shortener)
[![StyleCI](https://github.styleci.io/repos/142546375/shield?branch=master)](https://github.styleci.io/repos/142546375)
[![Total Downloads](https://img.shields.io/packagist/dt/dmitrybubyakin/laravel-urls-shortener.svg?style=flat-square)](https://packagist.org/packages/dmitrybubyakin/laravel-urls-shortener)

A simple url shortener for Laravel.

## Installation

This package can be installed via composer using this command:

```bash
composer require dmitrybubyakin/laravel-urls-shortener
```

You can publish the migration and the config file with:

```bash
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

