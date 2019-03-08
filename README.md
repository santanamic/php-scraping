# PHPscraping

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![PHP Version][ico-php-version]][link-php]
[![Coverage Status][ico-codecov]][link-codecov]
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

Web scraping in PHP is a class of data collection used to extract data from websites.



## Structure

```
src/
tests/
```


## Install

Via Composer

``` bash
$ composer require santanmic/php-scraping
```

## Usage

``` php
require_once __DIR__ . '/../vendor/autoload.php';

$url = 'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Ansatsu';
$PHPscraping = (new PHPScraping\Factory)->create($url);

echo $PHPscraping->getDescription(); // return <meta name="description"> content
echo $PHPscraping->getKeywords(); // return <meta name="Keywords"> content
echo $PHPscraping->getTitle(); // return web site title
echo $PHPscraping->getLinkNext(); // return next indicating paginated content <link rel="next" href="page_3>
echo $PHPscraping->getLinkPrev(); // return prev indicating paginated content <link rel="prev" href="page_1>

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email instead of using the issue tracker.

## Credits

- [][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/santanamic/php-scraping.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/santanamic/php-scraping/master.svg?style=flat-square
[ico-php-version]: https://img.shields.io/badge/php->=7.1-8892BF.svg
[ico-downloads]: https://img.shields.io/packagist/dt/santanamic/php-scraping.svg?style=flat-square
[ico-codecov]: https://codecov.io/gh/santanamic/php-scraping/branch/master/graph/badge.svg

[link-packagist]: https://packagist.org/packages/santanamic/php-scraping
[link-travis]: https://travis-ci.org/santanamic/php-scraping
[link-php]: https://php.net/
[link-downloads]: https://packagist.org/packages/santanamic/php-scraping
[link-codecov]: https://codecov.io/gh/santanamic/php-scraping
[link-author]: https://github.com/
[link-contributors]: ../../contributors
