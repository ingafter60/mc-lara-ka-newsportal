<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'ABOUT PAGE';
});

Route::get('/contact', function () {
    return 'CONTACT';
});

Route::get('/user/{id}/{name?}', function ($id, $name = "ING") {
    return 'Your id is: ' . $id . "and your name is: " . $name;
})->where('id', '[0-9]+');

Route::get('/world', 'HelloController@hello');

Route::get('/add', 'AddController@index');
