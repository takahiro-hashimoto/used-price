@extends('layouts.app')

@section('content')

<h2>watchトップ2</h2>

    <ul>
    @foreach ($watches as $watch)
        <li>{{ $watch->name }}</li>
        <li>
            @if ($watch->type === 0)
                hoge
            @elseif ($watch->type === 1)
                fuga
            @endif
        </li>
        <li>
            @if ($watch->size === 1)
                41mm or 45mm
            @elseif ($watch->size === 2)
                40mm or 44mm
            @endif
        </li>
    @endforeach
    </ul>

@endsection