# Generate Zod schemata from PHP classes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zakini/laravel-to-zod.svg?style=flat-square)](https://packagist.org/packages/zakini/laravel-to-zod)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zakini/laravel-to-zod/test.yml?branch=main&label=tests&style=flat-square)](https://github.com/zakini/laravel-to-zod/actions?query=workflow%3Atest+branch%3Amain)
[![GitHub Lint Action Status](https://img.shields.io/github/actions/workflow/status/zakini/laravel-to-zod/lint.yml?branch=main&label=lint&style=flat-square)](https://github.com/zakini/laravel-to-zod/actions?query=workflow%3Alint+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zakini/laravel-to-zod.svg?style=flat-square)](https://packagist.org/packages/zakini/laravel-to-zod)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-to-zod.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-to-zod)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require zakini/laravel-to-zod
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-to-zod-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-to-zod-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-to-zod-views"
```

## Usage

```php
$laravelToZod = new Zakini\LaravelToZod();
echo $laravelToZod->echoPhrase('Hello, Zakini!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Josh Wells](https://github.com/zakini)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
