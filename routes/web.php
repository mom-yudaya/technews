<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/index', function() {
    return view('index');
});

Route::get('/landing', function() {
    return view('landing');
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/ReportUs', function() {
    return view('ReportUs');
});


