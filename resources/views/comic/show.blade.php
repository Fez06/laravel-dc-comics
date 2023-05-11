@extends('layout.app')

@section('page.main')
    
    <div>
        <h1>{{$comic->title}}</h1> 
        <h3>Price:{{$comic->price}}</h3>
        <p>
            @foreach ($comic->writers as $writer)
                {{$comic->writer}}
            @endforeach

        </p>
        <p>{{$comic->writers}}</p>
    </div>
    
    <h3><a href="{{ route('comics.index')}}">Torna indietro</a></h3>
@endsection