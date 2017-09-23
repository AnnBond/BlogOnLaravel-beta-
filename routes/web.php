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

Route::get('/', 'MainController@index')->name('main');
Route::get('/posts/create/', 'PostsController@create')->name('create');
Route::get('/posts/{post}', 'PostsController@show')->name('singlePost');
Route::get('/categories', 'CategoryController@categories')->name('categories');
Route::get('/category/{id}', 'CategoryController@categoryById')->name('categoryById');
Route::get('/about', 'MainController@about')->name('about');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
