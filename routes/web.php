<?php


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
    $posts = Post::all();

    return view('posts',[
        'posts' => $posts
    ]);
});





Route::get('/posts/{post}', function ($slug) {

    //Find a post by its slug and pass it to a view called "post"

    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);


});



// Route::get('/home', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return "Hi this is about us page ";
// });

// Route::get('/services', function () {
//     return view('admin.index');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
