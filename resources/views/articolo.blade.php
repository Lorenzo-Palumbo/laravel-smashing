@php
    $arrayArticoli = config('articoli');
    $articolo = $arrayArticoli[$id];
@endphp

@extends('layouts.user-layout')
@section('titolo')
    {{$articolo['titolo']}}
@endsection

@section('content')
        <div class="articolo">
            <img src="{{$articolo['avatar']}}" alt="avatar">
            <h3>nome autore: {{$articolo['nomeAutore']}}</h3>
            <div class="articolo-info">
                <h1>{{$articolo['titolo']}}</h1>
                <p>{{$articolo['descrizione']}}</p>
                <small>{{$articolo['data']}}</small>
            </div>
        </div>
@endsection
