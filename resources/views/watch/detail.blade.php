@extends('layouts.app')

@section('content')

<h1>中古{{ $watch->name }}を買うならどこが安い？中古ECサイト比較でおすすめがわかる</h1>

<ul>
    <li>モデル: {{ $watch->name }}</li>
    <li>容量: {{ $watch->name }}</li>
</ul>

<h2>{{ $watch->name }}の中古価格</h2>

<div class="l-priceRanking l-bottom-large">
    <div class="priceRanking">
      <div class="priceRanking-title-container">
        <p class="priceRanking-title">Apple Watch 9</p>
        <p class="priceRanking-sub-title">主要ECサイトの中古価格ランキング</p>
      </div>			  
      <ol class="priceRanking-list">
    	  <li><span class="priceRanking-list-name">にこスマ</span><span class="priceRanking-list-link"><a href="">¥10,500</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">ゲオ・オンラインストア</span><span class="priceRanking-list-link"><a href="">¥11,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">じゃんぱら</span><span class="priceRanking-list-link"><a href="">¥12,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">イオシス</span><span class="priceRanking-list-link"><a href="">¥12,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">リコレ</span><span class="priceRanking-list-link"><a href="">¥16,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">postex</span><span class="priceRanking-list-link"><a href="">¥18,000</a><span></span></span></li>
      </ol>
    </div>
    
    <div class="priceRanking">
      <div class="priceRanking-title-container">
        <p class="priceRanking-title">Apple Watch 9</p>
        <p class="priceRanking-sub-title">主要ECサイトの中古価格ランキング</p>
      </div>			  
      <ol class="priceRanking-list">
    	  <li><span class="priceRanking-list-name">にこスマ</span><span class="priceRanking-list-link"><a href="">¥10,500</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">ゲオ・オンラインストア</span><span class="priceRanking-list-link"><a href="">¥11,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">じゃんぱら</span><span class="priceRanking-list-link"><a href="">¥12,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">イオシス</span><span class="priceRanking-list-link"><a href="">¥12,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">リコレ</span><span class="priceRanking-list-link"><a href="">¥16,000</a><span></span></span></li>
    	  <li><span class="priceRanking-list-name">postex</span><span class="priceRanking-list-link"><a href="">¥18,000</a><span></span></span></li>
      </ol>
    </div>

</div>

@endsection