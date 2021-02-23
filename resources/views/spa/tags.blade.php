@extends("layouts.app")
@section("name")
    TAGS - API
@endsection
@section("content")
    <h1 class="text-center">All TAGS from the API</h1>

    <div id="app">
        <tags-component></tags-component>
    </div>
@endsection
@section("js_link")
    <script src="{{asset('js/app.js')}}"></script>
@endsection