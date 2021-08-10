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


Route::get('/oarish_sanad_application', [HomeController::class, 'oarish_sanad_application'])->name('oarish_sanad_application.form');
Route::get('/oarish_sanader_abedon_jachai', [HomeController::class, 'oarish_sanader_abedon_jachai'])->name('oarish_sanader_abedon_jachai.form');
Route::get('/oarish_sonodpotro_jachai', [HomeController::class, 'oarish_sonodpotro_jachai'])->name('oarish_sonodpotro_jachai.form');

Route::get('/paribarik_sanad_application', [HomeController::class, 'paribarik_sanad_application'])->name('paribarik_sanad_application.form');
Route::get('/parabarik_sonoder_abedon_jachai', [HomeController::class, 'parabarik_sonoder_abedon_jachai'])->name('parabarik_sonoder_abedon_jachai.form');
Route::get('/parabarik_sonodpotro_jachai', [HomeController::class, 'parabarik_sonodpotro_jachai'])->name('parabarik_sonodpotro_jachai.form');








Route::resource('cityzen', CityzenController::class);
