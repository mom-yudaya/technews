<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('pages.welcome');
// });
Route::get('/', [PagesController::class, 'welcome']);

// Route::get('/about', function() {
//     return view('pages.about');
// });
Route::get('/about', [PagesController::class, 'about']);

// Route::get('/contact', function() {
//     return view('pages.contact');
// });
Route::get('/contact', [PagesController::class, 'contact']);

// Route::get('/index', function() {
//     return view('pages.index');
// });
Route::get('/index', [PagesController::class, 'index']);

// Route::get('/landing', function() {
//     $title = "technewsdex";
//     $subtitle = 'hotnews';
//     return view('landing', compact('title', 'subtitle'));
// });
Route::get("/landing", [PagesController::class, "landing"]);

// Route::get('/blog', function() {
//     return view('blog');
// });
Route::get('/blog', [PagesController::class, 'blog']);

// Route::get('/ReportUs', function() {
//     return view('ReportUs');
// });
Route::get('/ReportUs', [PagesController::class, 'ReportUs']);

// Route::get('/profile', function () {
//     $first_name = "Mom";
//     $last_name = "Yudaya";
//     $full_name = "Mom Yudaya";
//     $major = "Computer Science";
//     $subject = "Web Framework";
//     return view('pages.profile', compact('first_name', 'last_name', 'full_name', 'major', 'subject'));
Route::get('/profile', [PagesController::class, 'profile']);

// });
