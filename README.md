# The Not Official XmlRiver PHP SDK

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/noahnxt/laravel-open-holiday-api.svg?style=flat-square)](https://packagist.org/packages/noahnxt/laravel-open-holiday-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/noahnxt/laravel-open-holiday-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/noahnxt/laravel-open-holiday-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/noahnxt/laravel-open-holiday-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/noahnxt/laravel-open-holiday-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/noahnxt/laravel-open-holiday-api.svg?style=flat-square)](https://packagist.org/packages/noahnxt/laravel-open-holiday-api) -->

A package to use the xmlriver API from the [Google API](https://xmlriver.com/apidoc/api-about/) and [Yandex API](https://xmlriver.com/apiydoc/apiy-about/).

## Installation

You can install the package via composer:

```bash
composer require ke/xmlriver
```

## Usage

```php
$googleQueryBuilder = new \Ke\XmlRiver\QueryBuilders\GoogleQueryBuilder();

$googleQueryBuilder->query('keyassort');

$xmlRiver = new \Ke\XmlRiver\XmlRiver(USER_ID, KEY);

$response = $xmlRiver->getResponse($googleQueryBuilder);

var_dump($response->dto()->data());
```

## Testing

```bash
composer test
```

## Documentation

Check out the [documentation](https://xmlriver.com/api/api-connect/) to get started.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.