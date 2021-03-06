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


Route::get('post/{id}/{name}', 'PostsController@show_post');

//Route::resource('post', 'PostsController');


/*Route::get('/about', function() {
    return "Hi about page";
});

Route::get('contact', function() {
    return "Contact";
});

Route::get('/post/{id}', function($id) {
    return "This is post number: " . $id;
});

Route::get('admin/post/example', function() {
    $url = route('admin.home');

    return $url;
})->name('admin.home');*/