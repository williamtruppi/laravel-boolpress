@extends("layouts.app")
@section("name")
    TAGS - BOOLPRESS
@endsection
@section("content")
    <h1>Boolean Categories</h1>
    <a href="{{route('tags.create')}}" class="btn btn-primary">create a new category</a>
    <section class="tags_list">
    <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>create at</th>
            <th>updated at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td> {{$tag->name}}</td>
            <td>{{$tag->description}}</td>
            <td>{{$tag->created_at}}</td>
            <td>{{$tag->updated_at}}</td>

            <td>
                <a href="{{route('tags.show', ['tag'=> $tag->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i> View
                </a>
                <a href="{{route('tags.edit', ['tag' => $tag->id])}}" class="btn btn-warning">
                    <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                </a>

                <form action="{{route('tags.destroy', ['tag'=> $tag->id]) }}" method="post">
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
    