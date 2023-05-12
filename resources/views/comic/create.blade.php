@extends('layout.app')

@section('page.main')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li style="color:crimson"> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <ul>
        <li>
            <label for="name">Title</label>
            <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="@error('description') is-invalid @enderror">
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="thumb">Image link</label>
            <input type="text" id="thumb" name="thumb" class="@error('thumb') is-invalid @enderror">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="price">Price</label>
            <input type="number" name="price" step="0.01" id="price" class="@error('price') is-invalid @enderror">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="series">Series</label>
            <input type="text" id="series" name="series" class="@error('series') is-invalid @enderror">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="artists">Artists</label>
            <input type="text" id="artists" name="artists" class="@error('artists') is-invalid @enderror">
            @error('artists')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="writers">Writers</label>
            <input type="text" id="writers" name="writers" class="@error('writers') is-invalid @enderror">
            @error('writers')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="sale_date">Sale date:</label>
            <input type="date" id="sale_date" name="sale_date" class="@error('sale_date') is-invalid @enderror">
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>

        <li>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" class="@error('type') is-invalid @enderror">
            @error('type')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </li>
    </ul>

    <input type="submit" value="Salva">

</form>

<h3><a href="{{ route('comics.index')}}">Torna indietro</a></h3>
    
@endsection