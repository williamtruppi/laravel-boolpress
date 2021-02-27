@extends("layouts.app")
@section("name")
    CATEGORIES CREATE - BOOLPRESS
@endsection
@section("content")

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Create post</h1>
    <form action="{{route('categories.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$category->name}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    