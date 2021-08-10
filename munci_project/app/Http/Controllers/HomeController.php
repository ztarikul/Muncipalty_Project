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

    public function paribarik_sanad_application()
    {
        return view('oarish.paribarik_sanad_application');
    }

    public function parabarik_sonoder_abedon_jachai()
    {
        return view('oarish.parabarik_sonoder_abedon_jachai');
    }
    public function parabarik_sonodpotro_jachai()
    {
        return view('oarish.parabarik_sonodpotro_jachai');
    }
}
