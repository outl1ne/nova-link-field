# Nova Link Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/outl1ne/nova-link-field.svg?style=flat-square)](https://packagist.org/packages/outl1ne/nova-link-field)
[![Total Downloads](https://img.shields.io/packagist/dt/outl1ne/nova-link-field.svg?style=flat-square)](https://packagist.org/packages/outl1ne/nova-link-field)

This [Laravel Nova](https://nova.laravel.com/) package allows you to create and manage menus and menu items.

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Features

- Add links to index, detail and form views with ease

## Installation

Install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require outl1ne/nova-link-field
```

## Usage

```php
use Outl1ne\NovaLinkField\Link;

public function fields(Request $request) {
    Link::make('Example link', 'some_value')
      ->text('Link to some value')
      ->to(fn ($someValue) => "https://example.com/{$someValue}")
      ->blank(),
}
```

## Credits

- [Tarvo Reinpalu](https://github.com/tarpsvo)

## License

Nova Link Field is open-sourced software licensed under the [MIT license](LICENSE.md).
