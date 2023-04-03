<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components.calendar');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/dash/crud', function() {
    return view('crud.index');
});

Route::get('/dash/crud/create', function () {
    return view('crud.create');
});


