@extends('layout.app')

@section('page.main')
    
    <div>
        <h1>{{$comic->title}}</h1> 
        <h3>Price:{{$comic->price}}</h3>
        <p>
            @foreach ($comic->artists as $artist)
                {{$comic->artist}}
            @endforeach

        </p>
        {{-- <p>{{$comic->writers}}</p> --}}
    </div>
    
    <h3><a href="{{ route('comics.index')}}">Torna indietro</a></h3>
@endsection