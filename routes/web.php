<?php
// homepage route
Route::get('/', function () {
    return view('welcome');
});
// test route
Route::get('test','TestController@index');
