@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection
@section("content")
    <h1>Nome --> {{$category->name}}</h1>
    <p>Descrizione --> {{$category->description}}</p>
@endsection