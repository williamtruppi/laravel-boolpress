<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::get("posts", function () {
    return response()->json([
        "success" => true,
        "data" => App\Post::all(),
    ], 200);
});

Route::get("categories", function () {
    return response()->json([
        "success" => true,
        "data" => App\Category::all(),
    ], 200);
});

Route::get("tags", function () {
    return response()->json([
        "success" => true,
        "data" => App\Tag::all(),
    ], 200);
});

Route::get("articles", function () {
    return response()->json([
        "success" => true,
        "data" => App\Article::all(),
    ], 200);
});
