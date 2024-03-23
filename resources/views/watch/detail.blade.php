@extends('layouts.app')

@section('content')

<?php echo($shops) ?>

@php
  $sortedShops = $shops->toArray();
  usort($sortedShops, function($a, $b) {
    return $a['pivot']['price'] <=> $b['pivot']['price'];
  });
@endphp


{{ Breadcrumbs::render('item', $watches->id) }}


<div class="productInfo l-bottom-large">
  
  <div class="productInfo-left">
  	<p class="productInfo-image">
  	  <img src="{{ asset('images/150x150.png') }}" alt="{{ $watches->name }}の商品画像" width="100%" height="auto">
  	</p>
  </div>
  
  <div class="productInfo-right">
    <div class="l-bottom-medium">
      <p class="productInfo-title">{{ $watches->name }}</p>
      <p class="productInfo-release">発売日：{{ date('Y年n月j日', strtotime($watches->manufacture_date)) }}</p>
    </div>
    <ul class="productInfo-price l-bottom-medium">
      <li>
      	<span class="productInfo-price-icon">中古最安値</span><span class="productInfo-price-text">¥10,500</span>
      </li>
      <li>
      	<span class="productInfo-price-icon">中古相場</span>
      	<span class="productInfo-price-text">¥13,250</span>
      </li>
    </ul>
    <ul class="productInfo-spec">
      <li class="{{ $watches->charge == 0 ? 'is-active' : '' }}">急速充電</li>
      <li class="{{ $watches->display == 0 ? 'is-active' : '' }}">常時点灯</li>
      <li class="{{ $watches->detection == 0 ? 'is-active' : '' }}">衝突事故検出</li>
      <li class="{{ $watches->skin_temperature == 0 ? 'is-active' : '' }}">皮膚温度測定</li>
	    <li class="{{ $watches->oxygen == 0 ? 'is-active' : '' }}">血中酸素濃度測定</li>
      <li class="{{ $watches->cardiogram == 0 ? 'is-active' : '' }}">電気心拍センサー</li>
      <li class="{{ $watches->doubletap == 0 ? 'is-active' : '' }}">ダブルタップ</li>
    </ul>
  </div>
</div>

<h2 class="l-bottom-medium">{{ $watches->name }}の中古価格</h2>

<div class="l-bottom-medium">
<p>中古{{ $watches->name }}の最安値をGPSモデルとGPS + セルラーモデルに分けて紹介。価格は各サイトのコンディションAのものから取得しています。（データ更新日：2024年3月18日）</p>
</div>

<div class="priceInfo-container l-bottom-large">

  <div class="priceInfo">
    <div class="priceInfo-title-container">
      <p class="priceInfo-title">GPSモデル</p>
      <p class="priceInfo-sub-title">主要ECサイトの中古価格</p>
    </div>        
    <ol class="priceInfo-list">
      <li><span class="priceInfo-list-name">にこスマ</span><span class="priceInfo-list-link"><a href="">¥10,500</a><span></span></span></li>
      <li><span class="priceInfo-list-name">ゲオ・オンラインストア</span><span class="priceInfo-list-link"><a href="">¥11,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">じゃんぱら</span><span class="priceInfo-list-link"><a href="">¥12,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">イオシス</span><span class="priceInfo-list-link"><a href="">¥12,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">リコレ</span><span class="priceInfo-list-link"><a href="">¥16,000</a><span></span></span></li>
    </ol>
  </div>
  
  <div class="priceInfo">
    <div class="priceInfo-title-container">
      <p class="priceInfo-title">GPS + セルラーモデル</p>
      <p class="priceInfo-sub-title">主要ECサイトの中古価格</p>
    </div>        
    <ol class="priceInfo-list">
      <li><span class="priceInfo-list-name">にこスマ</span><span class="priceInfo-list-link"><a href="">¥10,500</a><span></span></span></li>
      <li><span class="priceInfo-list-name">ゲオ・オンラインストア</span><span class="priceInfo-list-link"><a href="">¥11,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">じゃんぱら</span><span class="priceInfo-list-link"><a href="">¥12,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">イオシス</span><span class="priceInfo-list-link"><a href="">¥12,000</a><span></span></span></li>
      <li><span class="priceInfo-list-name">リコレ</span><span class="priceInfo-list-link"><a href="">¥16,000</a><span></span></span></li>
    </ol>
  </div>
  
  <div class="priceInfo">
    <div class="priceInfo-title-container">
      <p class="priceInfo-title">GPS + セルラーモデル</p>
      <p class="priceInfo-sub-title">主要ECサイトの中古価格</p>
    </div>        
    <ol class="priceInfo-list">
      @foreach ($sortedShops as $shop)
      <li><span class="priceInfo-list-name">{{ $shop['name'] }}</span><span class="priceInfo-list-link">¥{{ $shop['pivot']['price'] }}</span></li>
      @endforeach
    </ol>
  </div>

</div>

<h2 class="l-bottom-medium">{{ $watches->name }}はいつまで使える？</h2>

<h2 class="l-bottom-medium">{{ $watches->name }}とその他モデルの比較</h2>

<h2 class="l-bottom-medium">{{ $watches->name }}を中古で買う際のよくある質問</h2>


@endsection