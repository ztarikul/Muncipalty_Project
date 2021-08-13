<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProkosholController;
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
Route::get('/paribarik_sonoder_abedon_jachai', [HomeController::class, 'paribarik_sonoder_abedon_jachai'])->name('paribarik_sonoder_abedon_jachai.form');
Route::get('/paribarik_sonodpotro_jachai', [HomeController::class, 'paribarik_sonodpotro_jachai'])->name('paribarik_sonodpotro_jachai.form');

Route::get('/trade_license_application', [HomeController::class, 'trade_license_application'])->name('trade_license_application.form');
Route::get('/trade_license_abedon_jacai', [HomeController::class, 'trade_license_abedon_jacai'])->name('trade_license_abedon_jacai.form');
Route::get('/trade_license_nabayon_abedon', [HomeController::class, 'trade_license_nabayon_abedon'])->name('trade_license_nabayon_abedon.form');
Route::get('/trade_license_jacai', [HomeController::class, 'trade_license_jacai'])->name('trade_license_jacai.form');


Route::get('/primisis_sanad', [HomeController::class, 'primisis_sanad'])->name('primisis_sanad.form');
Route::get('/posha_pranir_license', [HomeController::class, 'posha_pranir_license'])->name('posha_pranir_license.form');


Route::get('/rasta_khonon_er_onumoti', [HomeController::class, 'rasta_khonon_er_onumoti'])->name('rasta_khonon_er_onumoti.form');
Route::get('/emaratnirman_pukurkhonon_vorat_abedon', [HomeController::class, 'emaratnirman_pukurkhonon_vorat_abedon'])->name('emaratnirman_pukurkhonon_vorat_abedon.form');
Route::get('/vumi_bebohar_char_potrer_abedon', [HomeController::class, 'vumi_bebohar_char_potrer_abedon'])->name('vumi_bebohar_char_potrer_abedon.form');
Route::get('/notun_holding_abedon', [HomeController::class, 'notun_holding_abedon'])->name('notun_holding_abedon.form');
Route::get('/holding_naam_jari_abedon', [HomeController::class, 'holding_naam_jari_abedon'])->name('holding_naam_jari_abedon.form');


Route::resource('cityzen', CityzenController::class);

Route::resource('tradelicense', TradeLicenseController::class);

Route::resource('paribarik', ParibarikController::class);

Route::resource('oarish', OarishController::class);

Route::resource('poshaprani', PoshaPraniController::class);


Route::post('/emarot_pukur_application', [ProkosholController::class, 'emarot_pukur_application'])->name('prokoshol.emarot_pukur_application');

Route::post('/vumi_bebohar_charpto', [ProkosholController::class, 'vumi_bebohar_charpto'])->name('prokoshol.vumi_bebohar_charpto');