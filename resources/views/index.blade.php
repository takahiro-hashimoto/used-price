@extends('layouts.app')

@section('content')

<h2 class="l-bottom-large">Apple製品</h2>

<ul class="panel l-bottom-xlarge">
    <li>
        <a class="panel-link" href="/iphone/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="iPhoneのイメージ画像">
            <dl class="panel-link-text">
                <dt>iPhone</dt>  
                <dd>iPhone15、14、13、SEなどの中古料金相場とおすすめECサイトを解説</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="Apple Watchのイメージ画像">
            <dl class="panel-link-text">
                <dt>Apple Watch</dt>  
                <dd>Apple Watc9、８、７、SE、Ultraの中古相場とおすすめECサイトを解説</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="iPadのイメージ画像">
            <dl class="panel-link-text">
                <dt>iPad</dt>  
                <dd>iPad Pro、Air、mini、無印の中古料金相場、おすすめECサイトを解説</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="iMacのイメージ画像">
            <dl class="panel-link-text">
                <dt>iMac</dt>  
                <dd>中古価格 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="MacBookのイメージ画像">
            <dl class="panel-link-text">
                <dt>MacBook</dt>  
                <dd>中古価格 料金相場 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="AirPodsのイメージ画像">
            <dl class="panel-link-text">
                <dt>AirPods</dt>  
                <dd>中古価格 料金相場 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
</ul>
</ul>

<h2 class=" l-bottom-large">Androidスマホ</h2>

<ul class="panel l-bottom-xlarge">
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="">
            <dl class="panel-link-text">
                <dt>Pixel</dt>  
                <dd>中古価格 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="">
            <dl class="panel-link-text">
                <dt>Galaxy</dt>  
                <dd>中古価格 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
    <li>
        <a class="panel-link" href="/watch/">
            <img class="panel-link-thumb" src="{{ asset('images/150x150.png') }}" alt="">
            <dl class="panel-link-text">
                <dt>Xperia</dt>  
                <dd>中古価格 カメラ性能比較 中古価格 カメラ性能比較</dd>
            </dl>
        </a>
    </li>
</ul>

{{-- @include('parts.az-icon') --}}

@endsection