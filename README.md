# Filament redirects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erikgreasy/filament-redirects.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/filament-redirects)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/filament-redirects/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/erikgreasy/filament-redirects/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erikgreasy/filament-redirects.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/filament-redirects)



Manage HTTP redirects from Filament panel.

## Installation

You can install the package via composer:

```bash
composer require erikgreasy/filament-redirects
```

Run the migrations
```bash
php artisan migrate
```

Add middleware to your application
```php
// bootstrap/app.php

->withMiddleware(function (Middleware $middleware) {
    $middleware->append(\Erikgreasy\FilamentRedirects\Http\Middlewares\RedirectMiddleware::class);
})
```

Add plugin to your Filament Panel Provider
```php
// eg. app/Providers/Filament/AdminPanelProvider.php

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(new \Erikgreasy\FilamentRedirects\FilamentRedirectsPlugin());
}
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
