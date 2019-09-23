<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/search', function () {

    return App\Models\Post::search(\request('q'))->get();
    // TODO paginationで取得したかったけどうまく行かないのでとりあえずgetで取得
    // return App\Models\Post::search(\request('q'))->paginate();
});
