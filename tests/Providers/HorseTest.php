<?php

namespace Geekish\FakerProviders\Tests\Providers;

use Geekish\FakerProviders\Animals\Horse;
use ReflectionClass;

it('can generate a random horse breed 🐴', function () {
    $provider = new ReflectionClass(Horse::class);
    /** @var string[] */
    $breeds = $provider->getProperty('breeds')->getValue();
    /** @var string */
    $breed = $this->faker()->horseBreed();

    expect($breed)->toBeString();
    expect(in_array($breed, $breeds))->toBeTrue();
});
