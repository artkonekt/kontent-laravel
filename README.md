# Kontent CMF Laravel 5 Integration Package

## Usage

This package shouldn't be used directly, use [Kontent Eloquent](https://github.com/artkonekt/kontent-eloquent) or [Kontent Analogue](https://github.com/artkonekt/kontent-analogue) instead, both are implicitly relying on this package.

## Installation

If for any reason you want to install this directly, go ahead:

### Composer

Add the dependency to composer: `composer require konekt/kontent-laravel`

### Register The Provider

In the `config/app.php` configuration file, add to the provider array:

```php
'providers' => [
    // Other Service Providers

    Konekt\Kontent\Laravel\KontentServiceProvider::class,
],
```
