# The Not Official XmlRiver PHP SDK

[![Test Suite](https://github.com/MarkelovSergey/xmlriver/actions/workflows/tests.yml/badge.svg)](https://github.com/MarkelovSergey/xmlriver/actions/workflows/tests.yml)
[![Tests Code Style](https://img.shields.io/github/actions/workflow/status/MarkelovSergey/xmlriver/lint.yml?branch=main&label=Code%20Style&style=flat-square)](https://github.com/MarkelovSergey/xmlriver/actions?query=workflow%3Alint+branch%3Amain)

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