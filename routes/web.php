<?php

use App\Actions\Dashboard\ViewDashboard;
use App\Actions\User\StoreUser;
use App\Actions\User\UpdateUser;
use App\Actions\User\ViewUsers;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', ViewDashboard::class)->name('home');
    Route::get('users', ViewUsers::class)->name('users.index');
    Route::post('users', StoreUser::class)->name('users.store');
    Route::put('users/{user}', UpdateUser::class)->name('users.update');
});
