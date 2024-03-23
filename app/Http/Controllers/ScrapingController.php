<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ScrapingController extends Controller
{
    
    public function getContents()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://specially198.com/');
        $crawler = new Crawler($response->getBody()->getContents());

        $header_text = $crawler->filter('#header-in > div');
        return $header_text->text();
    }
    
}