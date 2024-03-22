<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/w', 'MyPlaceController@index');
Route::get('/cal', 'CalculatorController@index');
Route::post('/calculator', 'CalculatorController@calculate');
Route::get('/my', 'MyController@index');
Route::post('/result', 'MyController@result');
Route::get('/main', 'MainController@index');
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts2', 'Post2Controller@index')->name('post2.index');
Route::get('/posts3', 'Post3Controller@index')->name('post3.index');
Route::get('/posts4', 'Post4Controller@index')->name('post4.index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');


Route::get('/crudposts', 'CrudPostController@index')->name('crudpost.index');
Route::get('/crudposts/create', 'CrudPostController@create')->name('crudpost.create');;
Route::get('/crudposts/{post}', 'CrudPostController@show')->name('crudpost.show');
Route::get('/crudposts/{post}/edit', 'CrudPostController@edit')->name('crudpost.edit');


Route::post('/crudposts', 'CrudPostController@store')->name('crudpost.store');

Route::patch('/crudposts/{post}', 'CrudPostController@update')->name('crudpost.update');
Route::delete('/crudposts/{post}', 'CrudPostController@destroy')->name('crudpost.delete');
