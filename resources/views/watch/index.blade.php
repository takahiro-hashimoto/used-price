@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('watch') }}

<h1 class="l-bottom-large">Apple Watch 一覧</h1>

<ul class="l-bottom-large">
    @foreach ($patterns as $pattern)
        <li><a href="/watch/{{ $pattern->id }}">{{ $pattern->name }}</a></li>
    @endforeach
</ul>

@endsection