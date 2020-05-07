@php
    $data = config('prodotti');
    $prodotto = $data[$id];
@endphp


@extends('layouts.user')
@section ('titolo')
    {{$prodotto['titolo']}}
@endsection


@section ('main')
    <div class="prodotto-fullwidth">
        <div class="prodotto">
            <h1>{{$prodotto['titolo']}}</h1>
            <img src="{{$prodotto['src-h']}}" alt="immagine grande">
            <img src="{{$prodotto['src-p']}}" alt="immagine piccola">
            <p>{!! $prodotto['descrizione'] !!}</p>
        </div>
    </div>

@endsection
