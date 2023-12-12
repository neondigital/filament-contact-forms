> [!WARNING]
> This plugin is still in development and may not work correctly.

# Filament Contact Forms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)

Filament Contact Forms allow you to easily create customer-facing forms that can be emailed and managed inside Filament.

## Installation

You can install the package via composer:

```bash
composer require neondigital/filament-contact-forms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-contact-forms"
php artisan migrate
```

## Usage

Simple example
```php
use NeonDigital\ContactForms\Facades\ContactForm;

ContactForm::register(
    Form::make('catalog_request')
        ->schema([
            // Filament Fields / Layouts
            TextInput::make('name')->label('Full Name')->minLength(2)->required(),
        ])
        ->mailable(CatalogMailable::class)
        ->recipients([
            'one@test.com',
        ])
);
``` 

Advanced example   
```php
use NeonDigital\ContactForms\Facades\ContactForm;

ContactForm::register(
    Form::make('catalog_request')
        ->schema([
            // Filament Fields / Layouts
            TextInput::make('name')->label('Full Name')->minLength(2)->required(),
        ])
        ->mailable(CatalogMailable::class)
        ->recipients([
            'one@test.com',
            'two@test.com',
        ])
        ->cc([
            'three@test.com',
            'four@test.com',
        ])
        ->bcc([
            'five@test.com',
            'six@test.com',
        ])
        ->loopRecipients(false) // avoids the CC/BCC getting spammed!
        ->mailer('postmark')
        ->queue(true)
);
```

Submit form
```php
use NeonDigital\ContactForms\Facades\ContactForm;

ContactForm::get('catalog_request')
    ->validation([
        'g-recaptcha-response' => 'required',
    ])
    ->submit($request);
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

- [Neon Digital](https://github.com/neondigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
