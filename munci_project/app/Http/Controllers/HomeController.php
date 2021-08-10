<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function nagorik()
    {
        return view('nagorik.jateyo_sanad_application');
    }

    public function store(Request $request){
        dd($request);
    }

    public function nagorik_sanad($id)
    {   if($id == 1){
        return view('nagorik.jateyo_sanad_application');
    }
       elseif($id == 2){
        return view('nagorik.mritto_sanad_application');

       }
       elseif($id == 3){
        return view('nagorik.charittik_sanad_application');

       }
       elseif($id == 4){
        return view('nagorik.obibahito_sanad');

       }
       elseif($id == 5){
        return view('nagorik.vumihin_sanad');

       }
       elseif($id == 6){
        return view('nagorik.ponno_bibahito_sanad');

       }
       elseif($id == 7){
        return view('nagorik.bashik_ayer_sanad');

       }
       elseif($id == 8){
        return view('nagorik.ekoi_name_pottoyon');

       }
       elseif($id == 9){
        return view('nagorik.protibondi');

       }
       elseif($id == 10){
        return view('nagorik.shanatan_dormo_obolombon');

       }
       elseif($id == 11){
        return view('nagorik.onomoti');

       }
       elseif($id == 12){
        return view('nagorik.pottoyan_potro');

       }

    }
     
    
    // nagorik
    public function nagorik_sanad_abedon_jacai()
    {
        return view('nagorik.nagorik_sanad_abedon_jacai');
    }
    public function nagorik_sanad_jacai()
    {
        return view('nagorik.nagorik_sanad_jacai');
    }


    //  oarish
    public function oarish_sanad_application()
    {
        return view('oarish.oarish_sanad_application');
    }
    
    
    public function oarish_sonodpotro_jachai()
    {
        return view('oarish.oarish_sonodpotro_jachai');
    }

    public function oarish_sanader_abedon_jachai()
    {
        return view('oarish.oarish_sanader_abedon_jachai');
    }

    public function paribarik_sanad_application()
    {
        return view('oarish.paribarik_sanad_application');
    }

    public function paribarik_sonoder_abedon_jachai()
    {
        return view('oarish.paribarik_sonoder_abedon_jachai');
    }
    public function paribarik_sonodpotro_jachai()
    {
        return view('oarish.paribarik_sonodpotro_jachai');
    }

    // license
    public function trade_license_application()
    {
        return view('license.trade_license_application');
    }
    public function trade_license_abedon_jacai()
    {
        return view('license.trade_license_abedon_jacai');
    }
    public function trade_license_nabayon_abedon()
    {
        return view('license.trade_license_nabayon_abedon');
    }
    public function trade_license_jacai()
    {
        return view('license.trade_license_jacai');
    }
    public function primisis_sanad()
    {
        return view('license.primisis_sanad');
    }
    public function posha_pranir_license()
    {
        return view('license.posha_pranir_license');
    }

    // prokusholi

    public function rasta_khonon_er_onumoti()
    {
        return view('prukoshol.rasta_khonon_er_onumoti');
    }
    public function emaratnirman_pukurkhonon_vorat_abedon()
    {
        return view('prukoshol.emaratnirman_pukurkhonon_vorat_abedon');
    }
    public function vumi_bebohar_char_potrer_abedon()
    {
        return view('prukoshol.vumi_bebohar_char_potrer_abedon');
    }
    public function notun_holding_abedon()
    {
        return view('prukoshol.notun_holding_abedon');
    }
    public function holding_naam_jari_abedon()
    {
        return view('prukoshol.holding_naam_jari_abedon');
    }
}
