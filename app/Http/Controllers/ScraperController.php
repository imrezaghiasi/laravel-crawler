<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class ScraperController extends Controller
{
    private $results = array();

    public function scraper()
    {
        $url = 'https://www.worldometers.info/coronavirus/';
        $client = new Client();
        $response = $client->get($url);

        $html = (string)$response->getBody();
        $crawler = new Crawler($html);

        $crawler->filter('#maincounter-wrap')->each(function ($item) {
            $this->results[$item->filter('h1')->text()] = $item->filter('.maincounter-number')->text();
        });

        $data = $this->results;
        return view('scraper', compact('data'));
    }

}
