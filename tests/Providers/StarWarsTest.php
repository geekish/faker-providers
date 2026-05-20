<?php

namespace Geekish\FakerProviders\Tests\Providers;

use Geekish\FakerProviders\Fandom\StarWars;
use ReflectionClass;

it('can generate a random character 👽', function () {
    $provider = new ReflectionClass(StarWars::class);
    /** @var string[] */
    $characters = $provider->getProperty('characters')->getValue();
    /** @var string */
    $character = $this->faker()->starWarsCharacter();

    expect($character)->toBeString();
    expect(in_array($character, $characters))->toBeTrue();
});

it('can generate a random droid 🤖', function () {
    $provider = new ReflectionClass(StarWars::class);
    /** @var string[] */
    $droids = $provider->getProperty('droids')->getValue();
    /** @var string */
    $droid = $this->faker()->starWarsDroid();

    expect($droid)->toBeString();
    expect(in_array($droid, $droids))->toBeTrue();
});

it('can generate a random planet 🪐', function () {
    $provider = new ReflectionClass(StarWars::class);
    /** @var string[] */
    $planets = $provider->getProperty('planets')->getValue();
    /** @var string */
    $planet = $this->faker()->starWarsPlanet();

    expect($planet)->toBeString();
    expect(in_array($planet, $planets))->toBeTrue();
});

it('can generate a random species 👽', function () {
    $provider = new ReflectionClass(StarWars::class);
    /** @var string[] */
    $items = $provider->getProperty('species')->getValue();
    /** @var string */
    $species = $this->faker()->starWarsSpecies();

    expect($species)->toBeString();
    expect(in_array($species, $items))->toBeTrue();
});

it('can generate a random vehicle 🚀', function () {
    $provider = new ReflectionClass(StarWars::class);
    /** @var string[] */
    $vehicles = $provider->getProperty('vehicles')->getValue();
    /** @var string */
    $vehicle = $this->faker()->starWarsVehicle();

    expect($vehicle)->toBeString();
    expect(in_array($vehicle, $vehicles))->toBeTrue();
});
