<?php

namespace Geekish\FakerProviders\Animals;

use Faker\Provider\Base;

class Horse extends Base
{
    /** @var string[] */
    protected static array $breeds = [
        'Abyssinian',
        'Akhal-Teke',
        'Altèr Real',
        'American Paint',
        'Andalusian',
        'Anglo-Arabian',
        'Appaloosa',
        'Arabian',
        'Assateague',
        'Australian Brumby',
        'Barb',
        'Bashkir Curly',
        'Belgian Warmblood',
        'Black Forest Horse',
        'Brumby',
        'Cleveland Bay',
        'Clydesdale',
        'Danish Warmblood',
        'Dutch Warmblood',
        'Falabella',
        'Faroese',
        'Friesian',
        'Hackney',
        'Haflinger',
        'Hanoverian',
        'Holsteiner',
        'Icelandic Horse',
        'Irish Draught',
        'Kathiawari',
        'Kladruber',
        'Knabstrupper',
        'Lipizzaner',
        'Lusitano',
        'Morgan Horse',
        'Mustang',
        'Namib Desert Horse',
        'National Show Horse',
        'Nez Perce Horse',
        'Norman Cob',
        'Norwegian Fjord',
        'Oberlander Horse',
        'Oldenburg Horse',
        'Paint Horse',
        'Percheron',
        'Quarab',
        'Quarter Horse',
        'Rhinelander',
        'Saddlebred',
        'Shagya Arabian',
        'Shetland Pony',
        'Shire',
        'Standardbred',
        'Tennessee Walking Horse',
        'Tersk Horse',
        'Thoroughbred',
        'Trakehner',
        'Warmblood',
        'Welsh Cob (Section D)',
        'Westphalian Horse',
        'Württemberger',
    ];

    public function horseBreed(): string
    {
        return static::randomElement(static::$breeds);
    }
}
