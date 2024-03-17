@extends('layouts.app')

@section('content')

<h2>AppleWatch 一覧</h2>

    @foreach ($watches as $watch)
    <ul class="l-bottom-large">
        <li><a href="{{ $watch->id }}">{{ $watch->name }}</a></li>
        <li>
            @if ($watch->type === 0)
                hoge
            @elseif ($watch->type === 1)
                fuga
            @endif
        </li>
        <li>
            @if ($watch->size === 0)
                41mm or 45mm
            @elseif ($watch->size === 1)
                40mm or 44mm
            @elseif ($watch->size === 2)
                49mm
            @endif
        </li>
    </ul>
    @endforeach

@endsection