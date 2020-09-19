<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return 'Welcome';
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/// Configuration

Route::get('/home/configuration',"ConfigurationController@configuration")->name('configuration');

Route::post('/home/configuration/update',"ConfigurationController@configurationUpdate");


///Category Route

Route::get('/home/category', 'CategoryController@index')->name('category');

Route::get('/home/category/show', 'CategoryController@show')->name('category.show');
Route::post('/home/category/insert', 'CategoryController@insert')->name('category.insert');


/// update ar delete baki
Route::post('/home/category/update','CategoryController@update')->name('category.update');

