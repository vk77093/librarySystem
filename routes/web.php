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
    return view('welcome');
});
Route::get('/sideBar',function(){
  return view('includes/sidebar');
});
Route::get('/logout',function(){
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/books','BookController');
Route::resource('/bookCategories','BookCategories');
Route::resource('/booksAuthor','BooksAuthorController');
Route::resource('/booksRacks','BooksRacksController');
Route::resource('/booksPublisher','BooksPublisherController');
Route::resource('/studentClass','StudentClassController');
Route::resource('/studentName','StudentNameController');
Route::resource('/students','StudentController');
Route::resource('BookIssue','BookIssueController');
Route::resource('BookReturn','BookReturnController');
