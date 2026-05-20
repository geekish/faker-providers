<?php

namespace Geekish\FakerProviders\Tests\Providers;

use Geekish\FakerProviders\Arts\Music;
use ReflectionClass;

it('can generate a random music genre 🎼', function () {
    $provider = new ReflectionClass(Music::class);
    /** @var string[] */
    $genres = $provider->getProperty('genres')->getValue();
    /** @var string */
    $genre = $this->faker()->musicalGenre();

    expect($genre)->toBeString();
    expect(in_array($genre, $genres))->toBeTrue();
});

it('can generate a random musical instrument 🎷', function () {
    $provider = new ReflectionClass(Music::class);
    /** @var string[] */
    $instruments = $provider->getProperty('instruments')->getValue();
    /** @var string */
    $instrument = $this->faker()->instrument();

    expect($instrument)->toBeString();
    expect(in_array($instrument, $instruments))->toBeTrue();
});

it('can generate a random female musician 👩‍🎤', function () {
    $provider = new ReflectionClass(Music::class);
    /** @var string[] */
    $musicians = $provider->getProperty('femaleMusicians')->getValue();
    /** @var string */
    $musician = $this->faker()->femaleMusician();

    expect($musician)->toBeString();
    expect(in_array($musician, $musicians))->toBeTrue();
});

it('can generate a random male musician 👨‍🎤', function () {
    $provider = new ReflectionClass(Music::class);
    /** @var string[] */
    $musicians = $provider->getProperty('maleMusicians')->getValue();
    /** @var string */
    $musician = $this->faker()->maleMusician();

    expect($musician)->toBeString();
    expect(in_array($musician, $musicians))->toBeTrue();
});

it('can generate a random band 🎸', function () {
    $provider = new ReflectionClass(Music::class);
    /** @var string[] */
    $musicians = $provider->getProperty('bands')->getValue();
    /** @var string */
    $musician = $this->faker()->band();

    expect($musician)->toBeString();
    expect(in_array($musician, $musicians))->toBeTrue();
});

it('can generate a random musician (female, male or band) 🎶', function () {
    $provider = new ReflectionClass(Music::class);

    /** @var string[] */
    $musicians = array_merge(
        $provider->getProperty('femaleMusicians')->getValue(),
        $provider->getProperty('maleMusicians')->getValue(),
        $provider->getProperty('bands')->getValue()
    );

    /** @var string */
    $musician = $this->faker()->musician();

    expect($musician)->toBeString();
    expect(in_array($musician, $musicians))->toBeTrue();
});
