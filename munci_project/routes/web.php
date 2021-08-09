<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('nagorik_sanad/{id}', [HomeController::class, 'nagorik_sanad'])->name('nagorik_sanad.form');
Route::get('/nagorik_sanad_abedon_jacai', [HomeController::class, 'nagorik_sanad_abedon_jacai'])->name('nagorik_sanad_abedon_jacai.form');
Route::get('/nagorik_sanad_jacai', [HomeController::class, 'nagorik_sanad_jacai'])->name('nagorik_sanad_jacai.form');







Route::resource('cityzen', CityzenController::class);
