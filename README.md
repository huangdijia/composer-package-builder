# Composer Package Builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/huangdijia/composer-package-builder.svg?style=flat-square)](https://packagist.org/packages/huangdijia/composer-package-builder)
[![Total Downloads](https://img.shields.io/packagist/dt/huangdijia/composer-package-builder.svg?style=flat-square)](https://packagist.org/packages/huangdijia/composer-package-builder)
<!-- [![Build Status](https://img.shields.io/travis/huangdijia/composer-package-builder/master.svg?style=flat-square)](https://travis-ci.org/huangdijia/composer-package-builder) -->
<!-- [![Quality Score](https://img.shields.io/scrutinizer/g/huangdijia/composer-package-builder.svg?style=flat-square)](https://scrutinizer-ci.com/g/huangdijia/composer-package-builder) -->

## Installation

You can install the package via composer:

```bash
composer g require huangdijia/composer-package-builder
```

## Usage

``` bash
composer build:composer-plugin
composer build:laravel-package
composer build:php-package
composer build:thinkphp-package
```

Options

~~~ bash
Options:
      --vendor[=VENDOR]            Vendor Name [default: "my-vendor"]
      --package[=PACKAGE]          Package Name [default: "my-package"]
      --author[=AUTHOR]            Author Name [default: "author"]
      --email[=EMAIL]              Author Email [default: "author@domain.com"]
      --description[=DESCRIPTION]  Package Description [default: "My awesome package"]
      --license[=LICENSE]          License, eg: mit,agpl-3,gpl-3,lgpl-3,mozilla-public-2,apache-2,unlicense
      --output[=OUTPUT]            /Users/hdj/Downloads
  -h, --help                       Display this help message
  -q, --quiet                      Do not output any message
  -V, --version                    Display this application version
      --ansi                       Force ANSI output
      --no-ansi                    Disable ANSI output
  -n, --no-interaction             Do not ask any interactive question
      --profile                    Display timing and memory usage information
      --no-plugins                 Whether to disable plugins.
  -d, --working-dir=WORKING-DIR    If specified, use the given directory as working directory.
      --no-cache                   Prevent use of the cache
  -v|vv|vvv, --verbose             Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
~~~

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dummy-email instead of using the issue tracker.

## Credits

- [Huangdijia](https://github.com/huangdijia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
