<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Pattern;
use App\Models\Shop;

class ScraperController extends Controller
{
    private $iosys_watches = [
        [
            "shop_id" => 1,
            "pattern_id" => 1,
            "url" => "https://iosys.co.jp/items/smartphone/iphone/iphone15_pro?cond=used&sort=l",
        ],
        [
            "shop_id" => 1,
            "pattern_id" => 2,
            "url" => "https://iosys.co.jp/items/smartphone/iphone/iphone14_pro?cond=used&sort=l",
        ],
        [
            "shop_id" => 1,
            "pattern_id" => 3,
            "url" => "https://iosys.co.jp/items/smartphone/iphone/iphone13_pro?cond=used&sort=l",
        ],
        [
            "shop_id" => 1,
            "pattern_id" => 4,
            "url" => "https://iosys.co.jp/items/smartphone/iphone/iphone12_pro?cond=used&sort=l",
        ],
    ];

    private function fetchPrice($iosys_watches)
    {
        $client = new Client();
        $response = $client->get($iosys_watches);
        $body = $response->getBody()->getContents();

       // 正規表現で最安値のみ抽出する
        preg_match('/<div class="price">\s*<p>([\d,]+)<span class="yen">円<\/span><\/p>/', $body, $matches);

        // カンマ除去と例外処理
        if (isset($matches[1])) {
            $price = str_replace(',', '', $matches[1]);
            return $price;
        } else {
            return null; // 在庫がない場合はnullを返す
        }
    }

    public function scrape()
    {
        foreach ($this->urls as $urlInfo) {
            $priceValue = $this->fetchPrice($urlInfo['url']);
            if ($priceValue !== null) {
                $pattern = Pattern::find($urlInfo['pattern_id']);
                $shop = Shop::find($urlInfo['shop_id']);
                
                // 中間テーブルの情報を更新する
                $pattern->shops()->wherePivot('pattern_id', $urlInfo['pattern_id'])
                                 ->wherePivot('shop_id', $urlInfo['shop_id'])
                                 ->updateExistingPivot($shop->id, ['price' => $priceValue]);
            }
            sleep(3);
        }
    }
}
