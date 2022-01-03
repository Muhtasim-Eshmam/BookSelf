<?php


Route::get('/', function () {
    return view('welcome');
});



Route::post('/addbooks', 'BooksController@store')->name('books.save');
Route::get('/admin', 'BooksController@index');
Route::get('/booklist', 'BooksController@show')->name('booklist');



Route::get('/getbooks', 'CustomerController@viewbooks');
Route::get('/docs', 'CustomerController@index');
Route::get('/comment', 'CustomerController@addcomment');
