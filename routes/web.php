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

Route::get('/', 'MainController@index' )->name('main');
Route::get('/posts/{post}', 'PostsController@singlePost' )->name('singlePost');
Route::get('/categories', 'CategoryController@categories')->name('categories');
Route::get('/category/{id}', 'CategoryController@categoryById')->name('categoryById');


