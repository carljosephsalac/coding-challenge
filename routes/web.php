<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
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
    return view('login');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'showLogin')->name('showLogin');
    Route::post('/login-user', 'loginUser')->name('loginUser');
    Route::get('/register', 'showRegister')->name('showRegister');
    Route::post('/register-user', 'registerUser')->name('registerUser');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(CrudController::class)->group(function() {
    Route::get('/home', 'showHome')->name('showHome');
    Route::get('/create', 'showCreate')->name('showCreate');
    Route::post('/save-info', 'saveInfo')->name('saveInfo');
    Route::get('/edit', 'showEdit')->name('showEdit');
    Route::post('/update-info', 'updateInfo')->name('updateInfo');
    Route::post('/delete', 'delete')->name('delete');
});
