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
Route::resource('NewQuestion', 'NewQuestionController');
Route::resource('NewAnswer', 'NewAnswerController');
Route::resource('ListQuestions', 'ListQuestionsController');
Route::resource('ListAnswers', 'ListAnswersController');

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');

Route::get('memorygame', 'MemoryGameController@index');
Route::get('memorygame/{id}', 'MemoryGameController@show');
Route::post('memorygame', 'MemoryGameController@store');
Route::put('memorygame/{id}', 'MemoryGameController@update');
Route::delete('memorygame/{id}', 'MemoryGameController@delete');
