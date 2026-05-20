<?php

namespace Geekish\FakerProviders\Tests\Providers;

use Geekish\FakerProviders\Arts\Literature;
use ReflectionClass;

it('can generate a random author ✒️', function () {
    $provider = new ReflectionClass(Literature::class);
    /** @var string[] */
    $authors = $provider->getProperty('authors')->getValue();
    /** @var string */
    $author = $this->faker()->author();

    expect($author)->toBeString();
    expect(in_array($author, $authors))->toBeTrue();
});

it('can generate a random literary genre 📖', function () {
    $provider = new ReflectionClass(Literature::class);
    /** @var string[] */
    $genres = $provider->getProperty('genres')->getValue();
    /** @var string */
    $genre = $this->faker()->genre();

    expect($genre)->toBeString();
    expect(in_array($genre, $genres))->toBeTrue();
});

it('can generate a random book series 📖', function () {
    $provider = new ReflectionClass(Literature::class);
    /** @var string[] */
    $seriesList = $provider->getProperty('series')->getValue();
    /** @var string */
    $series = $this->faker()->bookSeries();

    expect($series)->toBeString();
    expect(in_array($series, $seriesList))->toBeTrue();
});

it('can generate a random book title 📖', function () {
    $provider = new ReflectionClass(Literature::class);
    /** @var string[] */
    $titles = $provider->getProperty('titles')->getValue();
    /** @var string */
    $title = $this->faker()->bookTitle();

    expect($title)->toBeString();
    expect(in_array($title, $titles))->toBeTrue();
});
