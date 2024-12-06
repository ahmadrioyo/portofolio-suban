<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'selamat datang di portofolio saya']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'selamat datang di tentang saya']);
});

Route::get('/project', function () {
    return view('project', ['title' => 'selamat datang di project saya']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'selamat datang di contact saya']);
});
