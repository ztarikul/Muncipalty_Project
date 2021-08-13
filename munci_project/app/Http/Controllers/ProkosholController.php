<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RastaKhonon;
use App\Models\HoldingNaamJari;
use App\Models\NotunHolding;

class ProkosholController extends Controller
{
    //
    
    public function rasta_khonon_store(Request $request){
        // dd($request);
      $inputs = $request->all();
      $rasta_khonon = new RastaKhonon($inputs);
      $rasta_khonon->save();
      return redirect()->route('home');

    }
    public function holding_naam_jari_store(Request $request){
      // 
      // dd($request);
    $inputs = $request->all();
    $holding_naam_jari = new HoldingNaamJari($inputs);
    $holding_naam_jari->save();
    return redirect()->route('home');
   }

   public function notun_holding(Request $request){
    // 
    // dd($request);
  $inputs = $request->all();
  $notun_holding = new NotunHolding($inputs);
  $notun_holding->save();
  return redirect()->route('home');
 }
}
