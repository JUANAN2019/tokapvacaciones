<?php

use Symfony\Component\Panther\PantherTestCase;
use Symfony\Component\DomCrawler\Crawler;
use App\Entity\Artist;

class ArtistTest extends PantherTestCase
{
    public function testSetName()
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/artist');

        $name = "John Doe";
        $artist = new Artist();
        $artist->setName($name);

        $this->assertEquals($name, $artist->getName());
    }

    public function testSetCountry()
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/artist');

        $country = "United States";
        $artist = new Artist();
        $artist->setCountry($country);

        $this->assertEquals($country, $artist->getCountry());
    }

    // Agrega más métodos de prueba para las demás propiedades y funcionalidades de la clase Artist

    // ...
}
// namespace App\Tests;

// use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
// use Symfony\Component\DomCrawler\Crawler;

// class ArtistTest extends WebTestCase
// {
//     public function testSomething(): void
//     {
//         $client = static::createClient();
//         $crawler = $client->request('GET', '/api/artist');
//         $this->assertSelectorTextContains('h1', 'Hello World');
//     }
// }
