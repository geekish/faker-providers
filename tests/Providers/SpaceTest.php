<?php

namespace Geekish\FakerProviders\Tests\Providers;

use Geekish\FakerProviders\Science\Space;
use ReflectionClass;

it('can generate a random planet 🌍', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $planets = $provider->getProperty('planets')->getValue();
    /** @var string */
    $planet = $this->faker()->planet();

    expect($planet)->toBeString();
    expect(in_array($planet, $planets))->toBeTrue();
});

it('can generate a random dwarf planet 🪐', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $dwarfPlanets = $provider->getProperty('dwarfPlanets')->getValue();
    /** @var string */
    $dwarfPlanet = $this->faker()->dwarfPlanet();

    expect($dwarfPlanet)->toBeString();
    expect(in_array($dwarfPlanet, $dwarfPlanets))->toBeTrue();
});

it('can generate a random moon 🌙', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $moons = $provider->getProperty('moons')->getValue();
    /** @var string */
    $moon = $this->faker()->moon();

    expect($moon)->toBeString();
    expect(in_array($moon, $moons))->toBeTrue();
});

it('can generate a random galaxy 🌌', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $galaxies = $provider->getProperty('galaxies')->getValue();
    /** @var string */
    $galaxy = $this->faker()->galaxy();

    expect($galaxy)->toBeString();
    expect(in_array($galaxy, $galaxies))->toBeTrue();
});

it('can generate a random nebula 🌌', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $nebulae = $provider->getProperty('nebulae')->getValue();
    /** @var string */
    $nebula = $this->faker()->nebula();

    expect($nebula)->toBeString();
    expect(in_array($nebula, $nebulae))->toBeTrue();
});

it('can generate a random cluster ✨', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $clusters = $provider->getProperty('clusters')->getValue();
    /** @var string */
    $cluster = $this->faker()->cluster();

    expect($cluster)->toBeString();
    expect(in_array($cluster, $clusters))->toBeTrue();
});

it('can generate a random constellation ✨', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $constellations = $provider->getProperty('constellations')->getValue();
    /** @var string */
    $constellation = $this->faker()->constellation();

    expect($constellation)->toBeString();
    expect(in_array($constellation, $constellations))->toBeTrue();
});

it('can generate a random star ⭐', function () {
    $provider = new ReflectionClass(Space::class);
    /** @var string[] */
    $stars = $provider->getProperty('stars')->getValue();
    /** @var string */
    $star = $this->faker()->star();

    expect($star)->toBeString();
    expect(in_array($star, $stars))->toBeTrue();
});
