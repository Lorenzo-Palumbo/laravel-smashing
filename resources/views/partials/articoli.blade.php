@php
    $arrayArticoli = config('articoli');
@endphp

@extends('layouts.user-layout')
@section('titolo')
    articoli
@endsection

@section('content')
    @foreach ($arrayArticoli as $key => $articolo)
        <div class="articolo">
            <img src="{{$articolo['avatar']}}" alt="avatar">
            <h3>nome autore: {{$articolo['nomeAutore']}}</h3>
            <div class="articolo-info">
                <h2><a href="{{route('articoli.show', $key)}}">{{$articolo['titolo']}}</a></h2>
                <p>{{$articolo['descrizione']}}</p>
                <small>{{$articolo['data']}}</small>
            </div>
        </div>
    @endforeach
@endsection
