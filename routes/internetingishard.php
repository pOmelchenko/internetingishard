<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'internetingishard.home')->name('home');
Route::view('/dummy', 'internetingishard.dummy')->name('dummy');
Route::view('/boxes', 'internetingishard.boxes')->name('boxes');
Route::view('/css-selectors', 'internetingishard.css-selectors')->name('css-selectors');
Route::view('/floats', 'internetingishard.floats')->name('floats');
Route::view('/flexbox', 'internetingishard.flexbox')->name('flexbox');
Route::view('/advanced-positioning', 'internetingishard.advanced-positioning')->name('advanced-positioning');
Route::view('/menu', 'internetingishard.menu')->name('menu');
Route::view('/responsive-design', 'internetingishard.responsive-design')->name('responsive-design');
