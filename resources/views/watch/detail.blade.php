@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('item', $watch->id) }}

<h1 class="l-bottom-large">中古{{ $watch->name }}を買うならどこが安い？中古ECサイト比較でおすすめがわかる</h1>


<div class="productInfo l-bottom-large">
  
  <div class="productInfo-left">
  	<p class="mainVisual-image">
  	  <img src="{{ asset('images/150x150.png') }}" alt="{{ $watch->name }}の商品画像" width="100%" height="auto">
  	</p>
  </div>
  
  <div class="productInfo-right">
    <div class="l-bottom-medium">
      <p class="productInfo-title">{{ $watch->name }}</p>
      <p class="productInfo-release">発売日：2023年9月12日</p>
    </div>
    <ul class="productInfo-price l-bottom-medium">
      <li>
      	<span class="productInfo-price-icon">中古最安値</span>
      	<span class="productInfo-price-text">¥10,500</span>
      </li>
      <li>
      	<span class="productInfo-price-icon">中古相場</span>
      	<span class="productInfo-price-text">¥13,250</span>
      </li>
    </ul>
    <ul class="productInfo-spec">
      <li>急速充電</li>
      <li class="is-active">常時点灯</li>
      <li class="is-active">衝突事故検出</li>
      <li class="is-active">皮膚温度測定</li>
	    <li class="is-active">血中酸素濃度測定</li>
      <li>電気心拍センサー</li>
      <li class="is-active">水温水深センサー</li>
      <li class="is-active">日本語入力</li>
    </ul>
  </div>
</div>

<h2 class="l-bottom-medium">{{ $watch->name }}の中古価格</h2>

<div class="l-bottom-medium">
<p>中古{{ $watch->name }}の最安値をGPSモデルとGPS + セルラーモデルに分けて紹介。価格は各サイトのコンディションAのものから取得しています。（データ更新日：2024年3月18日）</p>
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

</div>

<h2 class="l-bottom-medium">{{ $watch->name }}はいつまで使える？</h2>

<h2 class="l-bottom-medium">{{ $watch->name }}とその他モデルの比較</h2>

<h2 class="l-bottom-medium">{{ $watch->name }}を中古で買う際のよくある質問</h2>

@endsection