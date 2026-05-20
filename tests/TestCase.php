<?php

namespace Geekish\FakerProviders\Tests;

use Faker\Generator;
use Geekish\FakerProviders\FakerProviders;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function faker(): Generator
    {
        $faker = new Generator;

        FakerProviders::register($faker);

        return $faker;
    }
}
