@extends('layouts.app')

@section("title", "中古価格")

@section('description', 'Laravel個別ページです。')

@section('content')

<ul>
    @foreach($h2Tags as $tag)
        <li>{!! $tag !!}</li>
    @endforeach
</ul>

{{-- @include('parts.az-icon') --}}

@endsection