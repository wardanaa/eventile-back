<?php

Route::group(['middleware'=> 'auth:sanctum'], function () {
    Route::get('/payment', 'PaymentController@index');
    Route::post('/payment/{event}', 'PaymentController@pay');
    Route::get('/ticket', 'TicketController@index');
});

Route::get('event/all', 'EventController@all');
Route::apiResource('event', 'EventController');

Route::group(['namespace' => 'Auth'], function () {
    Route::post('register', 'RegisterController@register');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->middleware('auth:sanctum');
    Route::post('me', function () {
        return auth()->user();
    })->middleware('auth:sanctum');

    Route::get('login/github', 'LoginController@redirectToProvider');
    Route::post('login/github/callback', 'LoginController@handleProviderCallback');
});
