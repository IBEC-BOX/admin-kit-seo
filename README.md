# SEO package for Admin Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibec-box/admin-kit-seo.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-seo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-seo/run-tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/ibec-box/admin-kit-seo/actions?query=workflow%3Arun-tests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-seo/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/ibec-box/admin-kit-seo/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/ibec-box/admin-kit-seo.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-seo)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ibecsystems/admin-kit-seo
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="admin-kit-seo-migrations"
php artisan migrate
```

## Usage

The Eloquent Model you're editing uses the `HasSEO` trait:
```php
use AdminKit\SEO\Traits\HasSEO;

class Post extends AbstractModel
{
    use HasSEO;
}
```

And you can use `SEOSection` to Filament Resource or other forms:
```php
use Filament\Resources\Form;
use AdminKit\SEO\Forms\Components\SEOSection;

class ArticleResource extends Resource
{
    // ...
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Your other fields ...
            SEOSection::make(),
        ]);
    }
    // ...
}
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

- [Anastas Mironov](https://github.com/ast21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
