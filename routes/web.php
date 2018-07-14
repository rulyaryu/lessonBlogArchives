<?php

Route::get('/', 'HomeController@actionIndex')->name('home');
Route::get('/archives', 'ArchiveController@actionIndex')->name('archives');
Route::get('/{slug}', 'NewsController@actionIndex')->name('article');
Route::get('/category/{slug}', 'NewsController@actionCategory')->name('category');
Route::get('/tag/{slug}', 'NewsController@actionTag')->name('tag');
