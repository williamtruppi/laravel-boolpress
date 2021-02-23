<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <h1>Boolean posts</h1>
    <a href="{{route('posts.create')}}">create a new post</a>
    <section class="posts_list">
            @foreach ($posts as $post)
            <div class="single_post">
                <h2> {{ $post->title }} </h2>
                <p> {{ $post->body }} </p>
                <a href="{{route('posts.show', ['post'=> $post->id]) }}" class="btn btn-primary">VIEW</a>
                <a href="{{route('posts.edit', ['post'=> $post->id]) }}" class="btn btn-warning">EDIT</a>
                <form action="{{route('posts.destroy', ['post'=> $post->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger">
                </form>
                <hr>
            </div>
            @endforeach
    </section>

</body>
</html>