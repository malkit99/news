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

Route::get('/', 'HomePageController@index');
Route::get('/listing', 'ListingPageController@index')->name('listing');
Route::get('/details', 'DetailsPageController@index')->name('details');


Route::group(['prefix'=>'back','middleware'=>'auth'], function(){

    Route::get('/','Admin\DashboardController@index');
    Route::get('/category','Admin\CategoryController@index');
    Route::get('/category/create','Admin\CategoryController@create');
    Route::get('/category/edit','Admin\CategoryController@edit');
    Route::get('/permission','Admin\PermissionController@index');
    Route::get('/permission/create','Admin\PermissionController@create');
    Route::post('/permission/store','Admin\PermissionController@store');
    Route::get('/permission/edit/{id}','Admin\PermissionController@edit')->name('permission-edit');
    Route::put('/permission/update/{id}','Admin\PermissionController@update')->name('permission-update');
    Route::delete('/permission/delete/{id}','Admin\PermissionController@destroy')->name('permission-delete');
    Route::get('/role','Admin\RoleController@index');
    Route::get('/role/create','Admin\RoleController@create');
    Route::post('/role/store','Admin\RoleController@store');
    Route::get('/role/edit/{id}','Admin\RoleController@edit')->name('role-edit');
    Route::put('/role/update/{id}','Admin\RoleController@update')->name('role-update');
    Route::delete('/role/delete/{id}','Admin\RoleController@destroy')->name('role-delete');
    Route::get('/author','Admin\AuthorController@index');

});


Route::get('/about','AboutController@index')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
