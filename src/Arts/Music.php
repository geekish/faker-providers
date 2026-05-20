<?php

namespace Geekish\FakerProviders\Arts;

use Faker\Provider\Base;

class Music extends Base
{
    /** @var string[] */
    protected static array $genres = [
        "Rock",
        "Pop",
        "Electronic",
        "Folk",
        "World",
        "Country",
        "Jazz",
        "Funk",
        "Soul",
        "Hip Hop",
        "Classical",
        "Latin",
        "Reggae",
        "Blues",
        "Rap",
    ];

    /** @var string[] */
    protected static array $instruments = [
        "Electric Guitar",
        "Acoustic Guitar",
        "Flute",
        "Trumpet",
        "Clarinet",
        "Cello",
        "Harp",
        "Xylophone",
        "Harmonica",
        "Accordion",
        "Organ",
        "Piano",
        "Ukelele",
        "Saxophone",
        "Drums",
        "Violin",
        "Bass Guitar",
        "Oboe"
    ];

    /** @var string[] */
    protected static array $bands = [
        "AC/DC",
        "Arctic Monkeys",
        "Beck",
        "Bob Marley and the Wailers",
        "Coldplay",
        "Cream",
        "Eagles",
        "Florence and the Machine",
        "Foo Fighters",
        "Gorillaz",
        "Guns N' Roses",
        "Green Day",
        "Kasabian",
        "Led Zeppelin",
        "Metallica",
        "Nirvana",
        "Pearl Jam",
        "Phish",
        "Pink Floyd",
        "The Beatles",
        "The Cranberries",
        "The Cure",
        "The Killers",
        "The Kinks",
        "The Police",
        "The Pretenders",
        "The Ramones",
        "The Rolling Stones",
        "The Smiths",
        "The Strokes",
        "The Who",
        "The Yardbirds",
        "U2",

    ];

    /** @var string[] */
    protected static array $femaleMusicians = [
        "Adele",
        "Amy Winehouse",
        "Annie Lennox",
        "Björk",
        "Britney Spears",
        "Celine Dion",
        "Cher",
        "Christina Aguilera",
        "Ella Fitzgerald",
        "Joni Mitchell",
        "Janis Joplin",
        "Janet Jackson",
        "Kate Bush",
        "K.D Lang",
        "Kylie Minogue",
        "Lana Del Rey",
        "Madonna",
        "Mariah Carey",
        "Shania Twain",
        "Sheryl Crow",
        "Stevie Nicks",

    ];

    /** @var string[] */
    protected static array $maleMusicians = [
        "B.B. King",
        "Billy Idol",
        "Bob Dylan",
        "Bob Marley",
        "Bono",
        "Brian Wilson",
        "Bruce Springsteen",
        "Carlos Santana",
        "Cat Stevens",
        "Chuck Berry",
        "David Bowie",
        "David Gilmour",
        "Duke Ellington",
        "Ed Sheeran",
        "Elton John",
        "Elvis Costello",
        "Elvis Presley",
        "Eric Clapton",
        "Frank Sinatra",
        "Frank Zappa",
        "George Harrison",
        "Jeff Beck",
        "Jimi Hendrix",
        "John Lennon",
        "John Mayer",
        "Paul McCartney",
        "Pete Townshend",
        "Phil Collins",
        "Prince",
        "Ringo Starr",
        "Stevie Wonder",
    ];

    public function musicalGenre(): string
    {
        return static::randomElement(static::$genres);
    }

    public function instrument(): string
    {
        return static::randomElement(static::$instruments);
    }

    public function musician(): string
    {
        $artists = array_merge(static::$maleMusicians, static::$femaleMusicians, static::$bands);

        return static::randomElement($artists);
    }

    public function band(): string
    {
        return static::randomElement(static::$bands);
    }

    public function femaleMusician(): string
    {
        return static::randomElement(static::$femaleMusicians);
    }

    public function maleMusician(): string
    {
        return static::randomElement(static::$maleMusicians);
    }
}
