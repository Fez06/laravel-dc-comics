@extends('layout.app')

@section('page.main')

<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <label for="name">Title</label>
    <input type="text" name="title" id="title">

    <label for="price">Price</label>
    <input type="number" name="price" step="0.01" id="price">

    <input type="submit" value="Salva">

</form>

<h3><a href="{{ route('comics.index')}}">Torna indietro</a></h3>
    
@endsection