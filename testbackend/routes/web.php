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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'CoursesController@listCourse')->name('listCourse');
Route::get('/', 'CoursesController@listCourse')->name('listCourse');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //route for course
    Route::get('/courses', 'CoursesController@index')->name('courses');
    Route::get('/course/create', 'CoursesController@create')->name('course.create');
    Route::get('/course/edit/{id}', 'CoursesController@edit')->name('course.edit');
    Route::get('/course/delete/{id}', 'CoursesController@destroy')->name('course.delete');
    Route::post('/course/store', 'CoursesController@store')->name('course.store');
    Route::post('/course/update/{id}', 'CoursesController@update')->name('course.update');


    //route for category
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');



    //route for images
    Route::get('/images', 'UploadfileController@index')->name('images');
    Route::get('/image/create', 'UploadfileController@create')->name('image.create');
    Route::get('/image/edit/{id}', 'UploadfileController@edit')->name('image.edit');
    Route::get('/image/delete/{id}', 'UploadfileController@destroy')->name('image.delete');
    Route::post('/image/update/{id}', 'UploadfileController@update')->name('image.update');
    Route::post('/image/store', 'UploadfileController@store')->name('image.store');
});
