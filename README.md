[![Total Downloads](https://poser.pugx.org/ideenkonzept/easter/downloads)](https://packagist.org/packages/ideenkonzept/easter)

# Easter Date    
This package allow you to fetch easter date of a specific year as a carbon instanace.


## Installation

```
composer require ideenkonzept/easter
```

## Usage

```php
use Ideenkonzept\Easter\Date as EasterDate;

EasterDate::year(2020); //get easter date in year 2020

EasterDate::last() //get last easter date

EasterDate::next() //get next easter date
```

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
