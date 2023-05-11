@extends('layout.app')

@section('page.main')
    @foreach ($comics as $comic)
        {{$comic->title}} {{$comic->price}}
    @endforeach
@endsection