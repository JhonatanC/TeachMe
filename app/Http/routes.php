<?php

Route::get('/', [
    'as'   => 'latest', // nombre de la ruta
    'uses' => 'TicketsController@latest' // controlador y acción de la ruta
]);

Route::get('/populares', [
    'as'   => 'popular',
    'uses' => 'TicketsController@popular'
]);

Route::get('/pendientes', [
    'as' => 'open',
    'uses' => 'TicketsController@open'
]);

Route::get('/tutoriales', [
    'as' => 'closed',
    'uses' => 'TicketsController@closed'
]);

Route::get('solicitud/{id}',[
    'as' => 'details',
    'uses' => 'TicketsController@details'
]);