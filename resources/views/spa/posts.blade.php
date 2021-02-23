@extends("layouts.app")
@section("content")
    <h1>All posts from the API</h1>

    <div id="app">
        <posts-component></posts-component>
    </div>
@endsection
@section("js_link")
    <script src="{{asset('js/app.js')}}"></script>
@endsection
