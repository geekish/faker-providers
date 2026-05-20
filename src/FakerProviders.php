<?php

namespace Geekish\FakerProviders;

use Faker\Generator;

class FakerProviders
{
    public static function register(Generator $faker): void
    {
        $faker->addProvider(new Animals\Horse($faker));
        $faker->addProvider(new Arts\Literature($faker));
        $faker->addProvider(new Arts\Music($faker));
        $faker->addProvider(new Fandom\StarWars($faker));
        $faker->addProvider(new Science\Space($faker));
    }
}
