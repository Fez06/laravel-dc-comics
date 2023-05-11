@extends('layout.app')

@section('page.main')

    @foreach ($comics as $comic)
        <a href="{{ route('comics.show', $comic->id)}}">{{$comic->title}}  {{$comic->price}} </a><br>
    @endforeach

    <h3><a href="{{ route('comics.create') }}">Crea un nuovo prodotto!</a></h3>
@endsection