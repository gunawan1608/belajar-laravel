<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Gunawan Madia Pratama',
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Article', 'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    // $posts = $post = Post::find($slug);

    return view('post', [
        'title' => 'Article',
        'post' => $post
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('posts', [
        'title' => 'Halaman Penulis : ' .
        $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => 'Category : ' .
        $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);


