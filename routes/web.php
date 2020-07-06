<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');
Route::get('/about', function() {
    return view('about');
})->name('about');
Route::get('/courses', function() {
    return view('courses');
})->name('courses');
Route::get('/events', function() {
    return view('events');
})->name('events');
Route::get('/teachers', function() {
    return view('teachers');
})->name('teachers');
Route::get('/teacher-details', function() {
    return view('teacher-details');
})->name('teacher-details');
Route::get('/blog', function() {
    return view('blog');
})->name('blog');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::get('/course-details', function() {
    return view('course-details');
})->name('course-details');
Route::get('/event-details', function() {
    return view('event-details');
})->name('event-details');
Route::get('/blog-details', function() {
    return view('blog-details');
})->name('blog-details');

/* Auth rotes section start */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');
Route::get('/register', function() {
    return view('auth.register');
})->name('register');
/* Auth rotes section end */
