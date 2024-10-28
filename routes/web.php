<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Khoyum Masalik']);
});

Route::get('/posts', function () {
    $title = 'All Blogs';

    if (request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        if ($category) {
            $title = 'Posts in ' . $category->name;
        }
    }

    if (request('author')) {
        $author = User::firstWhere('username', request('author'));
        if ($author) {
            $title = 'Posts by ' . $author->name;
        }
    }

    return view('posts', [
        'title' => $title,
        'posts' => Post::filter(request(['search', 'category', 'author']))
                        ->latest()
                        ->paginate(6)
                        ->withQueryString()
    ]);
});

route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
