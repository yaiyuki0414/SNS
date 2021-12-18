<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', 'PostController@index');
    
    Route::get('/posts/create', 'PostController@create');
    
    Route::post('/posts', 'PostController@store');
    
    Route::get('/posts/{post}', 'PostController@show');
    
    Route::get('/categories/{category}', 'CategoryController@index');

    //Route::get('/home', 'HomeController@index')->name('home');
    
    //Route::post('/posts/{post}', 'PostController@update');
    //Route::delete('/posts/{post}', 'PostController@delete');
    //Route::get('/posts/{post}/edit', 'PostController@edit');
});
Auth::routes();