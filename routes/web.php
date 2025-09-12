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
    $query = Post::with(['author', 'categories']);
    
    // Handle search functionality
    if (request('search')) {
        $search = request('search');
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
              ->orWhere('body', 'like', '%' . $search . '%')
              ->orWhereHas('author', function($authorQuery) use ($search) {
                  $authorQuery->where('name', 'like', '%' . $search . '%');
              })
              ->orWhereHas('categories', function($categoryQuery) use ($search) {
                  $categoryQuery->where('name', 'like', '%' . $search . '%');
              });
        });
    }
    
    return view('posts', [
        'title' => request('search') ? 'Search Results for: ' . request('search') : 'Article', 
        'posts' => $query->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post',['title' => $post->title, 'post' => $post]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('posts', [
        'title' => 'Posts by ' . $user->name,
        'posts' => $user->posts()->with(['author', 'categories'])->latest()->paginate(9)
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => 'Category: ' . $category->name,
        'posts' => $category->posts()->with(['author', 'categories'])->latest()->paginate(9)
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);