<?php

namespace Geekish\FakerProviders\Science;

use Faker\Provider\Base;

/**
 * Based upon the following sources
 * Added dwarfPlanets
 *
 * @see https://github.com/faker-ruby/faker/blob/main/lib/locales/en/space.yml
 * @see https://github.com/mbezhanov/faker-provider-collection/blob/master/src/Faker/Provider/Space.php
 */
class Space extends Base
{
    protected static array $planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', /* Honorable mention to Pluto */];
    protected static array $dwarfPlanets = ['Pluto', 'Ceres', 'Makemake', 'Haumea', 'Eris'];
    protected static array $moons = ['Moon', 'Deimos', 'Phobos', 'Ganymede', 'Callisto', 'Io', 'Europa', 'Titan', 'Rhea', 'Iapetus', 'Dione', 'Tethys', 'Hyperion', 'Ariel', 'Puck', 'Oberon', 'Umbriel', 'Triton', 'Proteus'];
    protected static array $galaxies = ['Milky Way', 'Andromeda', 'Triangulum', 'Whirlpool', 'Blackeye', 'Sunflower', 'Pinwheel', 'Hoags Object', 'Centaurus A', 'Messier 83', 'Sombrero'];
    protected static array $nebulae = ['Lagoon Nebula', 'Eagle Nebula', 'Triffid Nebula', 'Dumbell Nebula', 'Orion Nebula', 'Horsehead Nebula', 'Ring Nebula', 'Bodes Nebula', 'Owl Nebula', 'Crab Nebula', 'Cat\'s Eye Nebula', 'Helix Nebula'];
    protected static array $clusters = ['Wild Duck', 'Hyades', 'Coma', 'Butterfly', 'Messier 7', 'Pleiades', 'Beehive Cluster', 'Pearl Cluster', 'Hodge 301', 'Jewel Box Cluster', 'Wishing Well Cluster', 'Diamond Cluster', 'Trumpler 10', 'Collinder 140', 'Liller 1', 'Koposov II', 'Koposov I', 'Djorgovski 1', 'Arp-Madore 1', 'NGC 6144', 'NGC 2808', 'NGC 1783', 'Messier 107', 'Messier 70', 'Omega Centauri', 'Palomar 12', 'Palomar 4', 'Palomar 6', 'Pyxis Cluster', 'Segue 3'];
    protected static array $constellations = ['Orion', 'Leo', 'Gemini', 'Cancer', 'Canis Minor', 'Canis Major', 'Ursa Major', 'Ursa Minor', 'Virgo', 'Libra', 'Scorpius', 'Sagittarius', 'Lyra', 'Capricornus', 'Aquarius', 'Pisces', 'Aries', 'Leo Minor', 'Auriga', 'Hydra', 'Cepheus', 'Perseus', 'Cassiopeia', 'Draco', 'Pegasus', 'Cygnus', 'Andromeda'];
    protected static array $stars = ['Sun', 'Proxima Centauri', 'Rigil Kentaurus', 'Barnards Star', 'Wolf 359', 'Luyten 726-8A', 'Luyten 726-8B', 'Sirius A', 'Sirius B', 'Ross 154', 'Ross 248', 'Procyon A', 'Procyon B', 'Vega', 'Rigel', 'Arcturus', 'Betelgeuse', 'Mahasim', 'Polaris', 'Eta Carinae'];

    public function planet(): string
    {
        return static::randomElement(static::$planets);
    }

    public function dwarfPlanet(): string
    {
        return static::randomElement(static::$dwarfPlanets);
    }

    public function moon(): string
    {
        return static::randomElement(static::$moons);
    }

    public function galaxy(): string
    {
        return static::randomElement(static::$galaxies);
    }

    public function nebula(): string
    {
        return static::randomElement(static::$nebulae);
    }

    public function cluster(): string
    {
        return static::randomElement(static::$clusters);
    }

    public function constellation(): string
    {
        return static::randomElement(static::$constellations);
    }

    public function star(): string
    {
        return static::randomElement(static::$stars);
    }
}
