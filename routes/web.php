<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Portofolio']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Ahmad Maulana Subandrio']);
});

Route::get('/project', function () {
    return view('project', ['title' => 'Project']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
