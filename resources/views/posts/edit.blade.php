@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection

@section("content")
    <h1>Edit post {{$post->title}}</h1>
    <form action="{{ route('posts.update', ['post'=> $post->id]) }}" method="post">
        @csrf
        @method("PUT") <!-- passiamo PUT poichè il metodo più indicato per EDIT -->
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
