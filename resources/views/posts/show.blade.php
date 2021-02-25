@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection
@section("content")
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <h4> Category: {{$post->category ? $post->category->name : "no category"}}</h4>
@endsection
