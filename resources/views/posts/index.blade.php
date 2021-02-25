@extends("layouts.app")
@section("name")
    POSTS - BOOLPRESS
@endsection
@section("content")
    <h1>Boolean posts</h1>
    <a href="{{route('posts.create')}}">create a new post</a>
    <section class="posts_list">
    <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>category</th>
            <th>body</th>
            <th>create at</th>
            <th>updated at</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td> {{$post->title}}</td>
            <td> {{$post->category->name}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>

            <td>
                <a href="{{route('posts.show', ['post'=> $post->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i> View
                </a>
                <a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-warning">
                    <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                </a>

                <form action="{{route('posts.destroy', ['post'=> $post->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger">
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </section>
@endsection
    