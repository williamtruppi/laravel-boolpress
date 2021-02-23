@extends("layouts.app")
@section("name")
    CATEGORIES - API
@endsection
@section("content")
    <h1 class="text-center">All CATEGORIES from the API</h1>

    <div id="app">
        <categories-component></categories-component>
    </div>
@endsection
@section("js_link")
    <script src="{{asset('js/app.js')}}"></script>
@endsection