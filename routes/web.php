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



/// Configuration Route
Route::get('/home/configuration',"ConfigurationController@configuration")->name('configuration');

Route::post('/home/configuration/update',"ConfigurationController@configurationUpdate")->name('configuration.update');



///Category Route
Route::get('/home/category', 'CategoryController@index')->name('category');

Route::get('/home/category/show', 'CategoryController@show')->name('category.show');

Route::post('/home/category/insert', 'CategoryController@insert')->name('category.insert');

Route::get('/home/category/update/{id}','CategoryController@update')->name('category.update');

Route::post('/home/category/update/confirm/{id}','CategoryController@updateConfirm')->name('category.update.confirm');

Route::get('/home/category/delete/{id}','CategoryController@delete')->name('category.delete');


// SubCategory Route
Route::get('/home/subcategory', 'SubCategoryController@index')->name('subcategory');

Route::get('/home/subcategory/show', 'SubCategoryController@show')->name('subcategory.show');

Route::post('/home/subcategory/insert', 'SubCategoryController@insert')->name('subcategory.insert');

Route::get('/home/subcategory/update/{id}','SubCategoryController@update')->name('subcategory.update');

Route::post('/home/subcategory/update/confirm/{id}','SubCategoryController@updateConfirm')->name('subcategory.update.confirm');

Route::get('/home/subcategory/delete/{id}','SubCategoryController@delete')->name('subcategory.delete');


//SubSubCategory Route
Route::get('/home/subsubcategory', 'SubSubCategoryController@index')->name('subsubcategory');

Route::get('/home/subsubcategory/show', 'SubSubCategoryController@show')->name('subsubcategory.show');

Route::post('/home/subsubcategory/insert', 'SubSubCategoryController@insert')->name('subsubcategory.insert');

Route::get('/home/subsubcategory/update/{id}','SubSubCategoryController@update')->name('subsubcategory.update');

Route::post('/home/subsubcategory/update/confirm/{id}','SubSubCategoryController@updateConfirm')->name('subsubcategory.update.confirm');

Route::get('/home/subsubcategory/delete/{id}','SubSubCategoryController@delete')->name('subsubcategory.delete');


//Brand Route
Route::get('/home/brand', 'BrandController@index')->name('brand');

Route::get('/home/brand/show', 'BrandController@show')->name('brand.show');

Route::post('/home/brand/insert', 'BrandController@insert')->name('brand.insert');

Route::get('/home/brand/update/{id}','BrandController@update')->name('brand.update');

Route::post('/home/brand/update/confirm/{id}','BrandController@updateConfirm')->name('brand.update.confirm');

Route::get('/home/brand/delete/{id}','BrandController@delete')->name('brand.delete');



//Products Route
Route::get('/home/product','ProductController@index')->name('product');
Route::post('/home/product/insert', 'ProductController@insert')->name('product.insert');
