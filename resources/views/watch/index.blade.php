@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('watch') }}

<h1 class="l-bottom-large">Apple Watch 一覧</h1>

<ul class="l-bottom-large">
    @foreach ($watches as $watch)
        <li><a href="/watch/{{ $watch->id }}">{{ $watch->name }}</a></li>
    @endforeach
</ul>

@endsection