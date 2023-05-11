@extends('layout.app')

@section('page.main')

    @foreach ($comics as $comic)
        <a href="{{ route('comics.show', $comic->id)}}">{{$comic->title}}  {{$comic->price}} </a><br>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" id="delete" value="Cancella" >
        </form>
    @endforeach

    <h3><a href="{{ route('comics.create') }}">Crea un nuovo prodotto!</a></h3>
@endsection