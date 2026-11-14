<?php
use App\Models\About;
use App\Models\Blog;
use App\Models\Home;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $home = Home::first();
    return view('home', compact('home'));
});

Route::get('/about', function () {
    $about = About::all();

    $banner = $about->first();
    $cards  = $about->skip(1);   

    return view('about', compact('banner', 'cards'));
});

Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('blog', compact('blogs'));
});

Route::get('/contact', function () {
    return view('contact');
});