<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


Route::get(
    '/home',
    [
        'as' => 'list',
        'uses' => 'Controller@characterList'
    ]
);

Route::get(
    '/character/{id}',
    [
        'as'   => 'character',
        'uses' => 'Controller@character'
    ]
);

Route::get(
    '/houses',
    [
        'as'   => 'house',
        'uses' => 'Controller@houseList'
    ]
);

Route::get(
    '/house/{id}',
    [
        'as'   => 'characterPerHouse',
        'uses' => 'Controller@characterPerHouse'
    ]
);
