@extends('layout.app')

@section('page.main')
    
    <div>
        <h1>{{$comic->title}}</h1> 
        <h3>Price:{{$comic->price}}</h3>
    </div>
    
@endsection