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
    return view('layouts.app');
});

/* A resource beregisztrálja az összes "alap" routet a kontrollerhez
(amiben a php artisan make:controller AnswerSelectorController --resource
kapcsolóval szintén létrehoztam az alap funkciókat) */
Route::resource('AnswerSelector', 'AnswerSelectorController');
Route::resource('AnswerSelector/NewQuestion', 'NewQuestionController');