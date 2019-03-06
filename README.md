# PHPscraping

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
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

If you discover any security related issues, please email @example.com instead of using the issue tracker.

## Credits

- [][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/php-scraping/php-scraping.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/php-scraping/php-scraping/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/php-scraping/php-scraping.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/php-scraping/php-scraping.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/php-scraping/php-scraping.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/php-scraping/php-scraping
[link-travis]: https://travis-ci.org/php-scraping/php-scraping
[link-scrutinizer]: https://scrutinizer-ci.com/g/php-scraping/php-scraping/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/php-scraping/php-scraping
[link-downloads]: https://packagist.org/packages/php-scraping/php-scraping
[link-author]: https://github.com/
[link-contributors]: ../../contributors
