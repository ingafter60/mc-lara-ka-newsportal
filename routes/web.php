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

// CONCTROLLER
Route::get('/world', 'HelloController@hello');
Route::get('/add', 'AddController@index');

// VIEW
//Route::view('/about', 'about');
//Route::view('/contact', 'contact');

// CONTROLLER + VIEW
Route::get('/about', ['uses' => 'AboutController@about', 'as' => 'about']);
Route::get('/contact', ['uses' => 'ContactController@contact', 'as' => 'contact']);
