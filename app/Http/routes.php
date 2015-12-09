<?php

Route::get('/', [
    'as'   => 'tickets.latest', // nombre de la ruta
    'uses' => 'TicketsController@latest' // controlador y acción de la ruta
]);

Route::get('/populares', [
    'as'   => 'tickets.popular',
    'uses' => 'TicketsController@popular'
]);

Route::get('/pendientes', [
    'as' => 'tickets.open',
    'uses' => 'TicketsController@open'
]);

Route::get('/tutoriales', [
    'as' => 'tickets.closed',
    'uses' => 'TicketsController@closed'
]);

Route::get('solicitud/{id}',[
    'as' => 'tickets.details',
    'uses' => 'TicketsController@details'
]);