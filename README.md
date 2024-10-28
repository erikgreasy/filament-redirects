# This is my package filament-redirects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erikgreasy/filament-redirects.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/filament-redirects)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/filament-redirects/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/erikgreasy/filament-redirects/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/filament-redirects/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/erikgreasy/filament-redirects/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erikgreasy/filament-redirects.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/filament-redirects)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require erikgreasy/filament-redirects
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-redirects-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-redirects-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-redirects-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentRedirects = new Erikgreasy\FilamentRedirects();
echo $filamentRedirects->echoPhrase('Hello, Erikgreasy!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Erik Masny](https://github.com/erikgreasy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.