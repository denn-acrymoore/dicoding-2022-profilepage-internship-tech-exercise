<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return redirect('/profile-page/academy');
});

Route::get('/profile-page/academy', [ProfileController::class, 'profilePageAcademy'])
    ->name('profile-academy');
Route::get('/profile-page/event', [ProfileController::class, 'profilePageEvent'])
    ->name('profile-event');
Route::get('/profile-page/challenge', [ProfileController::class, 'profilePageChallenge'])
    ->name('profile-challenge');
Route::get('/profile-page/winning-app', [ProfileController::class, 'profilePageWinningApp'])
    ->name('profile-winning-app');

Route::post('/edit-profile', [ProfileController::class, 'editProfile']);
