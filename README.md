# geekish/faker-providers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/geekish/faker-providers.svg?style=flat-square)](https://packagist.org/packages/geekish/faker-providers)
[![Tests](https://img.shields.io/github/actions/workflow/status/geekish/faker-providers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/geekish/faker-providers/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/geekish/faker-providers.svg?style=flat-square)](https://packagist.org/packages/geekish/faker-providers)

Adds some extra providers to [fakerphp/faker](https://github.com/fakerphp/faker). Some are ported/adapted from [the original](https://github.com/faker-ruby/faker) and [mbezhanov/faker-provider-collection](https://github.com/mbezhanov/faker-provider-collection).

## Installation

You can install the package via composer:

```bash
composer require geekish/faker-providers
```

## Usage

To register all providers:

```php
use Faker\Generator;

$faker = new Faker\Generator();

FakerProviders::register($faker);
```

In Laravel, adding providers to the Faker instance accessible via `fake()` can be done like so:

```php
use Faker\Generator;
use Geekish\FakerProviders\FakerProviders;
use Illuminate\Foundation\Application;

$locale = $this->app->get('config')->get('app.faker_locale', 'en_US');
$abstract = Generator::class.':'.$locale;

$this->app->resolving($abstract, function (Generator $faker, Application $app) {
    FakerProviders::register($faker);

    return $faker;
});
```

Of course, you are free to register the providers individually:

```php
use Faker\Generator;
use Geekish\FakerProviders\Arts\Literature;

$faker = new Faker\Generator();

$faker->addProvider(new Literature($faker));

$faker->bookTitle();
```

### Providers

- [Literature](https://github.com/geekish/faker-providers/tree/main/src/Arts/Literature.php)
  - `author`
  - `genre`
  - `bookTitle`
  - `bookSeries`
- [Horse](https://github.com/geekish/faker-providers/tree/main/src/Animals/Horse.php)
  - `horseBreed`
- [Music](https://github.com/geekish/faker-providers/tree/main/src/Arts/Music.php)
  - `musicalGenre`
  - `instrument`
  - `band`
  - `femaleMusician`
  - `maleMusician`
  - `musician` (generates any of the previous three)
- [StarWars](https://github.com/geekish/faker-providers/tree/main/src/Fandom/StarWars.php)
  - `starWarsCharacter`
  - `starWarsDroid`
  - `starWarsPlanet`
  - `starWarsSpecies`
  - `starWarsVehicle`
- [Space](https://github.com/geekish/faker-providers/tree/main/src/Science/Space.php)
  - `constellation`
  - `cluster`
  - `dwarfPlanet`
  - `galaxy`
  - `planet`
  - `moon`
  - `nebula`
  - `star`

## Testing

Each provider should be covered.

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hannah Chartier](https://github.com/geekish)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
