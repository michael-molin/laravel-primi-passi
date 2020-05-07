@php
    $data = config('prodotti');
    $prodotto = $data[$id];
    $numIndex = (int)$id;
@endphp


@extends('layouts.user')
@section ('titolo')
    {{$prodotto['titolo']}}
@endsection
@section ('main')
    <div class="prodotto-fullwidth">
        <div class="freccia {{($id == 0) ? 'disabled' : '' }}">
            <a href="{{route('prodotti.show' , $numIndex-1)}}"> <i class="fas fa-chevron-left"></i> </a>
        </div>
        <div class="prodotto">
            <h1>{{$prodotto['titolo']}}</h1>
            <img src="{{$prodotto['src-h']}}" alt="immagine grande">
            <img src="{{$prodotto['src-p']}}" alt="immagine piccola">
            <p>{!! $prodotto['descrizione'] !!}</p>
        </div>
        <div class="freccia {{($id == count($data)-1) ? 'disabled' : '' }}">
            <a href="{{route('prodotti.show' , $numIndex+1)}}"> <i class="fas fa-chevron-right"></i> </a>
        </div>
    </div>
@endsection
