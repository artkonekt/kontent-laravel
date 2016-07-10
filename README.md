# Kontent CMF Laravel 5 Integration Package

## Installation

### Composer

This package shouldn't be used directly, use either [Kontent Eloquent](https://github.com/artkonekt/kontent-eloquent) or [Kontent Analogue](https://github.com/artkonekt/kontent-analogue) instead, both are implicitly relying on this package.

Add the dependency to composer:

```bash

# either
composer require konekt/kontent-eloquent
# or
composer require konekt/kontent-analogue

# this works as well, but not much sense at the moment:
composer require konekt/kontent-laravel
```

### Register The Provider

In the `config/app.php` configuration file, add to the provider array:

```php
'providers' => [
    // Other Service Providers

    Konekt\Kontent\Laravel\KontentServiceProvider::class,
],
```

### Publish Files

```bash
php artisan vendor:publish --provider="Konekt\Kontent\Laravel\KontentServiceProvider" --tag=config
php artisan vendor:publish --provider="Konekt\Kontent\Laravel\KontentServiceProvider" --tag=migrations
```

### Edit Config

Edit the packages's config file `app/konekt.php`:
 
Available options are:

| Option                  | Meaning                                                                        | Default     |
|-------------------------|--------------------------------------------------------------------------------|-------------|
| `db.table_prefix`       | The database table prefix                                                      | `"konekt_"` |
| `translation.enabled`   | Whether or not to use the translation features <sup id="a1">[\*](#note1)</sup> | `false`     |
| `translation.default`   | The default language to use                                                    | `"en"`      |
| `translation.languages` | Array of your app's supported languages                                        | `['en']`    |

<b id="note1">\*:</b> _Configure this before you run the package's migrations.
This setting influences whether translation related columns are generated in
the database during the migration_ [↩](#a1)
  

