@extends('layouts.app')

@section("title", $watch->name . "を中古で安く購入できるECサイトを解説")

@section('description', $watch->name . "を中古最安値で購入できるECサイトをご紹介。他のモデルとのスペックの違いなどもわかりやすく解説しているので、ぜひチェックしてみてください。")

@section('content')

{{ Breadcrumbs::render('item', $watch->id) }}

<div class="productInfo l-bottom-large">

  <div class="productInfo-left">
  	<p class="productInfo-image">
  	  <img src="{{ asset('images/150x150.png') }}" alt="{{ $watch->name }}の商品画像" width="100%" height="auto">
  	</p>
  </div>
  <div class="productInfo-right">
    <div class="l-bottom-medium">
      <p class="productInfo-title">{{ $watch->name }}</p>
      <p class="productInfo-release">発売日：{{ date('Y年n月j日', strtotime($watch->manufacture_date)) }}</p>
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
      <li class="{{ $watch->charge == 0 ? 'is-active' : '' }}">急速充電</li>
      <li class="{{ $watch->display == 0 ? 'is-active' : '' }}">常時点灯</li>
      <li class="{{ $watch->detection == 0 ? 'is-active' : '' }}">衝突事故検出</li>
      <li class="{{ $watch->skin_temperature == 0 ? 'is-active' : '' }}">皮膚温度測定</li>
	    <li class="{{ $watch->oxygen == 0 ? 'is-active' : '' }}">血中酸素濃度測定</li>
      <li class="{{ $watch->cardiogram == 0 ? 'is-active' : '' }}">電気心拍センサー</li>
      <li class="{{ $watch->doubletap == 0 ? 'is-active' : '' }}">ダブルタップ</li>
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
  
  <!-- ここがわからない箇所です▼ -->
    @foreach ($patternShops as $patternShop)
  <div class="priceInfo">
    <div class="priceInfo-title-container">
      <p class="priceInfo-title">GPS + セルラーモデル</p>
      <p class="priceInfo-sub-title">主要ECサイトの中古価格</p>
    </div>
    @php $counter = 0; @endphp
    <ol class="priceInfo-list">
    @foreach ($patternShop as $shop)
        <li>
            <span class="priceInfo-list-name">{{ $shop[0]->name }}</span>
            <span class="priceInfo-list-link"><a href="">¥{{ $shop[0]->pivot_price }}</a></span>
        </li>
    @php $counter++; @endphp
    </ol>
    @endforeach
  </div>
  @endforeach
  <!-- ここがわからない箇所です ▲ -->

  <?php dump($patternShops) ?>

</div>

<h2 class="l-bottom-medium">その他の中古{{ $watch->name }}の購入先</h2>

<ul class="panelLink l-bottom-large">
  <li><a href=""><span class="text-bold">Apple認定整備済製品</span><br><span class="text-small">hogehogehoge</a></li>
  <li><a href=""><span class="text-bold">Amazon製備品</span><br><span class="text-small">hogehogehoge</a></li>
  <li><a href=""><span class="text-bold">メルカリ</span><br><span class="text-small">hogehogehoge</a></li>
  <li><a href=""><span class="text-bold">ラクマ</span><br><span class="text-small">hogehogehoge</a></li>
</ul>

<h2 class="l-bottom-medium">{{ $watch->name }}が前モデルから主に進化した点</h2>

<div class="definition border-none l-bottom-large">
  <dl class="definition-body">
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    <dt>タイトル</dt>
    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
  </dl>
</div>

<h2 class="l-bottom-medium">{{ $watch->name }}とその他モデルの比較</h2>

<h2 class="l-bottom-medium">{{ $watch->name }}を中古で買う際のよくある質問</h2>


@endsection