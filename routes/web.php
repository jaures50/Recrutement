<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecruteurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Les routes dans home

/* Routes home ou les autres vues */


Route::get('contact', function () {
    return view('home.contact');
});



// Sécurisation avec authentification et vérification de rôle
Route::middleware(['auth'])->group(function () {
    Route::get('profil', function () {
        $user = auth()->user();

        // Vérification du rôle de l'utilisateur
        if ($user->role === 'user' || $user->role === 'admin') {
            return view('home.profil');
        }

        // Si l'utilisateur n'a pas le bon rôle
        abort(403, 'Accès interdit.');
    })->name('profil');
});



Route::get('metier', function () {
    return view('home.metiers');
});
Route::get('propos', function () {
    return view('home.propos');
})->name('propos');
Route::get('job', function () {
    return view('home.job');
})->name('job');
Route::get('client', function () {
    return view('home.client');
})->name('client');
Route::get('404', function () {
    return view('home.404');
})->name('404');
Route::get('entreprise', function () {
    return view('home.entreprise');
})->name('entreprise');

Route::get('/', function () {
    return view('home.welcome');
});





Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'recruteur'])->group(function () {
    Route::get('/recruteur', [RecruteurController::class, 'index'])->name('recruteur.dashboard');
});

Route::get('/password/reset', function () {
    return view('auth.passwords.email');
})->name('password.request');

Route::get('/password/reset/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('password.reset');

//Route de changement de mot de passe 


Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->name('passwords.request');
