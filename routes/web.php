<?php

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
    return view('index');
});

Route::get('/innovation', function () {
    return view('innovation');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/project-detail', function () {
    return view('project-detail');
});

Route::get('/our-people', function () {
    return view('our-people');
});

Route::get('/contact', function() {
    return view('contact');
});