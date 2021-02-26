@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection
@section("content")
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <h4> Category: {{$post->category ? $post->category->name : "no category"}}</h4>
    <h4>Tags: </h4>
    @foreach ($post->tags as $tag)
        <span>{{$tag->name}}</span>
    @endforeach
@endsection
