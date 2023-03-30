<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/perfil', [UserController::class, 'userEdit'])->name('user.profile');
//     Route::post('/perfil/{id}', [UserController::class, 'userUpdate'])->name('profile.update');
//     // Route::delete('/perfil/{id}', [UserController::class, 'userDelete'])->name('user.delete');
//     Route::delete('/delete', [UserController::class, 'userDelete'])->name('user.delete');
// });
// Route::post('/delete', [UserController::class, 'userDelete'])->name('user.delete');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function() {

// });
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');

    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::delete('/profile', function () {
        // Lógica para eliminar el perfil
    })->name('profile.destroy');

    // otras rutas de Jetstream
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dash', function () {
    return view('user.index', ['user' => app()->make('App\Http\Controllers\UserController')->userIndex()]);
})->name('dash');

Route::get('/dash/crud', function() {
    return view('crud.index');
});

Route::get('/dash/crud/create', function () {
    return view('crud.create');
});



