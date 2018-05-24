<?php

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

Route::get('/', function () {
    return view('welcome');
});
