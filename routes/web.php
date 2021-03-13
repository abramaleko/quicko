<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

//import's the components
use App\Http\Livewire\Index;

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


Route::get('/',Index::class)->name('index');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google-signin');

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

