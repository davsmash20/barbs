<?php

Route::get('/', 'PagesController@index');
Route::get('d/amenities', 'PagesController@ntr');
Route::get('d/about', 'PagesController@about');
Route::get('d/comments', 'PagesController@comm');
Route::get('d/regform', 'PagesController@login');
Route::get('d/courses', 'PagesController@courses');
Route::get('d/services', 'PagesController@services');
// Route::post('addpost/{id}', 'PostsController@add');
Route::post('d/regform', 'AccountsController@register');
Route::post('d/comments', 'CommentsController@comments');
Route::get('d/comments', 'CommentsController@viewcomments');
Route::get('d/delete/{id}', 'CommentsController@delete');