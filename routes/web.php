<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});


Route::get('/category/{categories:slug}', function (Category $categories) {
    return view('posts', [
        'posts' => $categories->posts
    ]);
});


Route::get('/posts/{post:slug}', function (Post $post) {

    //Find a post by its id and pass it to a view called "post"

    return view('post', [
        'post' => $post
    ]);
});
