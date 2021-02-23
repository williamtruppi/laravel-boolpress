@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection
@section("content")
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
@endsection
