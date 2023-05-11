@extends('layout.app')

@section('page.main')
<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf

    @method('PUT')
    <ul>
        <li>
            <label for="name">Title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
        </li>

        <li>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{$comic->description}}">
        </li>

        <li>
            <label for="thumb">Image link</label>
            <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </li>

        <li>
            <label for="price">Price</label>
            <input type="number" name="price" step="0.01" id="price" value="{{$comic->price}}">
        </li>

        <li>
            <label for="series">Series</label>
            <input type="text" id="series" name="series" value="{{$comic->series}}">
        </li>

        <li>
            <label for="artists">Artists</label>
            <input type="text" id="artists" name="artists" value="{{$comic->artists}}">
        </li>

        <li>
            <label for="writers">Writers</label>
            <input type="text" id="writers" name="writers" value="{{$comic->writers}}">
        </li>

        <li>
            <label for="sale_date">Sale date:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </li>

        <li>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{$comic->type}}">
        </li>
    </ul>

    <input type="submit" value="Salva">

</form>

<h3><a href="{{ route('comics.index')}}">Torna indietro</a></h3>
@endsection