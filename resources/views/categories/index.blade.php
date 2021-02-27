@extends("layouts.app")
@section("name")
    CATEGORIES - BOOLPRESS
@endsection
@section("content")
    <h1>Boolean Categories</h1>
    <a href="{{route('categories.create')}}" class="btn btn-primary">create a new category</a>
    <section class="categories_list">
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
        @foreach($categories as $cat)
        <tr>
            <td>{{$cat->id}}</td>
            <td> {{$cat->name}}</td>
            <td>{{$cat->description}}</td>
            <td>{{$cat->created_at}}</td>
            <td>{{$cat->updated_at}}</td>

            <td>
                <a href="{{route('categories.show', ['category'=> $cat->id] )}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i> View
                </a>
                <a href="{{route('categories.edit', ['category' => $cat->id])}}" class="btn btn-warning">
                    <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                </a>

                <form action="{{route('categories.destroy', ['category'=> $cat->id]) }}" method="post">
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
    