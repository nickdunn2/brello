<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lanes', 'LanesController', [
    'except' => ['create', 'edit']
]);

Route::resource('tasks', 'TasksController', [
    'except' => ['create', 'edit']
]);

Route::resource('tags', 'TagsController', [
    'except' => ['create', 'edit']
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
