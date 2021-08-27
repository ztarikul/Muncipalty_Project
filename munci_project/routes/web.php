<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
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
Route::get('/onapotti', [HomeController::class, 'onapotti'])->name('onapotti.form');

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



Route::get('/jogajog', [HomeController::class, 'jogajog'])->name('jogajog.form');


Route::resource('cityzen', CityzenController::class);
Route::post('nagorik_abedon_tracking_page', 'CityzenController@nagorik_tracking_page')->name('nagorik_tracking_page');

Route::resource('paribarik', ParibarikController::class);

Route::resource('oarish', OarishController::class);

Route::resource('poshaprani', PoshaPraniController::class);

Route::resource('tradelicense', TradeLicenseController::class);
Route::post('/primisis_license', 'TradeLicenseController@primisis_license_store')->name('primisis_license.store'); 

Route::post('/rasta_khonon', [ProkosholController::class,'rasta_khonon_store'])->name('rasta_khonon.store'); 
Route::post('/notun_holding', [ProkosholController::class,'notun_holding'])->name('notun_holding.store'); 
Route::post('/holding_naam_jari', [ProkosholController::class,'holding_naam_jari_store'])->name('holding_naam_jari.store');

Route::post('/emarot_pukur_application', [ProkosholController::class, 'emarot_pukur_application'])->name('prokoshol.emarot_pukur_application');
Route::post('/vumi_bebohar_charpto', [ProkosholController::class, 'vumi_bebohar_charpto'])->name('prokoshol.vumi_bebohar_charpto');







/////////////////////////////////
/////////////////////////////////
/////////ADMIN////////////////

Route::get('/admin_dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/nagorik_home', [AdminController::class, 'nagorik_home'])->name('admin.nagorik_home');
Route::get('/admin/oarish_home', [AdminController::class, 'oarish_home'])->name('admin.oarish_home');
Route::get('/admin/license_home', [AdminController::class, 'license_home'])->name('admin.license_home');
Route::get('/admin/prokoshol_home', [AdminController::class, 'prokoshol_home'])->name('admin.prokoshol_home');
Route::get('/admin/member_home', [AdminController::class, 'member_home'])->name('admin.member_home');
Route::get('/admin/prokolpo_home', [AdminController::class, 'prokolpo_home'])->name('admin.prokolpo_home');



Route::get('/admin/notice', [NoticeController::class,'notice'])->name('admin.notice');
Route::post('/admin/notice_form', [NoticeController::class,'notice_form_store'])->name('admin.notice_form');
Route::get('admin/notice_delete/{id}', [NoticeController::class,'notice_delete'])->name('admin.notice_delete');
Route::get('admin/notice_edit/{id}', [NoticeController::class,'notice_edit'])->name('admin.notice_edit');
Route::post('admin/notice_update/{id}', [NoticeController::class,'notice_update'])->name('admin.notice_update');

Route::get('shokol_notice', [NoticeController::class, 'shokol_notice'])->name('shokol_notice.form');
Route::get('pouroshavar_tottho', [NoticeController::class, 'pouroshavar_tottho'])->name('pouroshavar_tottho');
Route::get('jono_protinidigon', [HomeController::class, 'jono_protinidigon'])->name('jono_protinidigon');


// Route::get('profileview', [MemberController::class, 'zaker_hossen_profileview'])->name('zaker_hossen_profileview');
Route::get('profileview/zaker_hossen', 'MembersController@zaker_hossen_profileview')->name('zaker_hossen.profileview'); 
Route::get('profileview/nurul_islam', 'MembersController@nurul_islam_profileview')->name('nurul_islam.profileview'); 
Route::get('profileview/takib_uddin', 'MembersController@takib_uddin_profileview')->name('takib_uddin.profileview'); 
Route::get('profileview/abdullah_ador', 'MembersController@abdullah_ador_profileview')->name('abdullah_ador.profileview'); 
Route::get('profileview/jahangir_alom', 'MembersController@jahangir_alom_profileview')->name('jahangir_alom.profileview'); 
Route::get('profileview/anwar_hossen', 'MembersController@anwar_hossen_profileview')->name('anwar_hossen.profileview'); 
Route::get('profileview/anayetullah', 'MembersController@anayetullah_profileview')->name('anayetullah.profileview');
Route::get('profileview/kajol', 'MembersController@kajol_profileview')->name('kajol.profileview');