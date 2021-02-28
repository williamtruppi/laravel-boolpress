@extends("layouts.app")
@section("name")
    TAGS - BOOLPRESS
@endsection
@section("content")
    <h1>Nome --> {{$tag->name}}</h1>
    <p>Descrizione --> {{$tag->description}}</p>
@endsection