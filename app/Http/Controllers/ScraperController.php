<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ScraperController extends Controller
{
    private $urls = [
        "iPhone15pro" => "https://iosys.co.jp/items/smartphone/iphone/iphone15_pro?cond=used&sort=l&l=l",
        "iPhone14pro" => "https://iosys.co.jp/items/smartphone/iphone/iphone14_pro?cond=used&sort=l",
        "iPhone13pro" => "https://iosys.co.jp/items/smartphone/iphone/iphone13_pro?cond=used&sort=l",
        "iPhone12pro" => "https://iosys.co.jp/items/smartphone/iphone/iphone12_pro?cond=used&sort=l"
    ];

    private function fetchPrice($url)
    {
        $client = new Client();
        $response = $client->get($url);
        $body = $response->getBody()->getContents();

        // 正規表現で最安値のみ抽出する
        preg_match('/<div class="price">\s*<p>([\d,]+)<span class="yen">円<\/span><\/p>/', $body, $matches);

        // カンマ除去と例外処理
        if (isset($matches[1])) {
            $price = str_replace(',', '', $matches[1]);
            return $price;
        } else {
            return '在庫がありませんでした';
        }
    }

    public function scrape()
    {
        $prices = [];

        foreach ($this->urls as $key => $url) {
            $prices[$key] = $this->fetchPrice($url);
            sleep(3);
        }
        
        dd($prices);

        return view('scraped-prices', compact('prices'));
    }
}