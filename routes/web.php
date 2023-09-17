<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
//    $user = auth()->user();
//    dd($user->notifications->count());
    dd(uniqid());
})->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', \App\Livewire\Dashboard\Index\Index::class)->name('dashboard');
});
Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', App\Livewire\Index\Users\Login\Show::class)->name('login');
        Route::get('/google-auth', [App\Livewire\Index\Users\Login\Show::class, 'redirectToGoogle'])->name('google-auth');
    });
    Route::group(['prefix' => 'register'], function () {
        Route::get('/', App\Livewire\Index\Users\Signup\Show::class)->name('signup');

    });
});
Route::get('google-check', [App\Livewire\Index\Users\Login\Show::class, 'handleGoogleCallback']);
Route::get('/verify/{hash}', App\Livewire\Dashboard\EmailVerify\Check::class)->name('email-verify');

Route::get('/invite/{invite_code}',[\App\Livewire\Dashboard\Menu\Invite\Show::class,'inviteProccess'])->name('invite-friend');
