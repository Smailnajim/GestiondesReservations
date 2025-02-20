<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/loging', function () {
    return view('loging');
});

Route::get('/register', [UserController::class, 'index']);

Route::post('/register/create', [UserController::class, 'inserUse']);

Route::get('/client/salles' , [UserController::class, 'allSalles']);