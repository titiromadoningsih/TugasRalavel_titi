<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\StudentController;
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
    return view('auth.login');
});

Route::view('/profile','profile');

Route::view('/document','document');

Auth::routes();

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store']);
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
