<?php

namespace App\Http\Controllers;

use App\Models\PrimisisLicense;
use App\Models\TradeLicense;
use Illuminate\Http\Request;

class TradeLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @request \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @request \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @request \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

      
        $inputs['delivery_type'] = $request['delivery_type'];
        $inputs['ownertype'] = $request['ownertype'];
        $inputs['holding_no'] = $request['holding_no'];
        $inputs['ecomname'] = $request['ecomname'];
        $inputs['bcomname'] = $request['bcomname'];

        $inputs['owner_permadd_eng'] = $request['owner_permadd_eng'];
        $inputs['owner_permadd_bng'] = $request['owner_permadd_bng'];
        $inputs['owner_preadd_eng'] = $request['owner_preadd_eng'];
        $inputs['owner_preadd_bng'] = $request['owner_preadd_bng'];

        $inputs['nationid'] = $request['nationid'];
        $inputs['bcno'] = $request['bcno'];
        $inputs['vatkor'] = $request['vatkor'];
        $inputs['tino'] = $request['tino'];
        $inputs['sign_lenth'] = $request['sign_lenth'];
        $inputs['sign_width'] = $request['sign_width'];
        $inputs['normal_sign'] = $request['normal_sign'];
        $inputs['light_sign'] = $request['light_sign'];
        $inputs['business_type_en'] = $request['business_type_en'];
        $inputs['business_type'] = $request['business_type'];
        $inputs['pay_amount'] = $request['pay_amount'];
        $inputs['be_gram'] = $request['be_gram'];
        $inputs['be_rbs'] = $request['be_rbs'];
        $inputs['be_wordno'] = $request['be_wordno'];
        $inputs['be_postof'] = $request['be_postof'];
        $inputs['be_thana'] = $request['be_thana'];
        $inputs['be_upazila'] = $request['be_upazila'];
        $inputs['be_dis'] = $request['be_dis'];
        $inputs['bb_gram'] = $request['bb_gram'];
        $inputs['bb_rbs'] = $request['bb_rbs'];
        $inputs['bb_wordno'] = $request['bb_wordno'];
        $inputs['bb_postof'] = $request['bb_postof'];
        $inputs['bb_thana'] = $request['bb_thana'];
        $inputs['bb_upazila'] = $request['bb_upazila'];
        $inputs['bb_dis'] = $request['bb_dis'];
        $inputs['mob'] = $request['mob'];
        $inputs['phone'] = $request['phone'];
        $inputs['email'] = $request['email'];
        $inputs['status'] = 'applied';

        $trade_license = new TradeLicense($inputs);
        $trade_license->save();

        $array_size = count($request['ewname']);
        // $sname_size = 0; 
 
        for($i=0; $i < $array_size; $i++){
            $owner_inputs['ewname'] = $request['ewname'][$i];
            $owner_inputs['bwname'] = $request['bwname'][$i];
            $owner_inputs['gender'] = $request['gender'][$i];
            $owner_inputs['mstatus'] = $request['mstatus'][$i];
            $owner_inputs['esname'] = $request['esname'][$i];
            $owner_inputs['bsname'] = $request['bsname'][$i];
            $owner_inputs['efname'] = $request['efname'][$i];
            $owner_inputs['bfname'] = $request['bfname'][$i];
            $owner_inputs['emname'] = $request['emname'][$i];
            $owner_inputs['bmname'] = $request['bmname'][$i];

            $trade_license->owners()->create($owner_inputs);
        }

        return view('sonod.trade_license_sonod',['trade_license'=> $trade_license]);
    }

    public function primisis_license_store(Request $request)
    {
        //
       
         
           $inputs['delivery_type'] = $request['delivery_type'];
            $inputs['ownertype'] = $request['ownertype'];
            $inputs['holding_no'] = $request['holding_no'];
            $inputs['ecomname'] = $request['ecomname'];
            $inputs['bcomname'] = $request['bcomname'];
           
            $inputs['owner_permadd_eng'] = $request['owner_permadd_eng'];
            $inputs['owner_permadd_bng'] = $request['owner_permadd_bng'];
            $inputs['owner_preadd_eng'] = $request['owner_preadd_eng'];
            $inputs['owner_preadd_bng'] = $request['owner_preadd_bng'];
            $inputs['nationid'] = $request['nationid'];
            $inputs['bcno'] = $request['bcno'];
            $inputs['vatid'] = $request['vatid'];
            $inputs['taxid'] = $request['taxid'];
            $inputs['sign_lenth'] = $request['sign_lenth'];
            $inputs['sign_width'] = $request['sign_width'];
            $inputs['normal_sign'] = $request['normal_sign'];
            $inputs['light_sign'] = $request['light_sign'];
            $inputs['agent_name'] = $request['agent_name'];
            $inputs['house_amount'] = $request['house_amount'];
            $inputs['bus_start'] = $request['bus_start'];
            $inputs['prev_lice_date'] = $request['prev_lice_date'];
            $inputs['business_type_en'] = $request['business_type_en'];
            $inputs['business_type'] = $request['business_type'];
            $inputs['pay_amount'] = $request['pay_amount'];
            $inputs['be_gram'] = $request['be_gram'];
            $inputs['be_rbs'] = $request['be_rbs'];
            $inputs['be_wordno'] = $request['be_wordno'];
            $inputs['be_postof'] = $request['be_postof'];
            $inputs['be_thana'] = $request['be_thana'];
            $inputs['be_upazila'] = $request['be_upazila'];
            $inputs['be_dis'] = $request['be_dis'];
            $inputs['bb_gram'] = $request['bb_gram'];
            $inputs['bb_rbs'] = $request['bb_rbs'];
            $inputs['bb_wordno'] = $request['bb_wordno'];
            $inputs['bb_postof'] = $request['bb_postof'];
            $inputs['bb_thana'] = $request['bb_thana'];
            $inputs['bb_upazila'] = $request['bb_upazila'];
            $inputs['bb_dis'] = $request['bb_dis'];
            $inputs['mob'] = $request['mob'];
            $inputs['phone'] = $request['phone'];
            $inputs['email'] = $request['email'];
            $inputs['status'] = $request['status'];


            
        $primisis_license = new PrimisisLicense($inputs);
        $primisis_license->save();

        $array_size = count($request['ewname']);

        for($i=0; $i < $array_size; $i++){
            $owner_inputs['ewname'] = $request['ewname'][$i];
            $owner_inputs['bwname'] = $request['bwname'][$i];
            $owner_inputs['gender'] = $request['gender'][$i];
            $owner_inputs['mstatus'] = $request['mstatus'][$i];
            $owner_inputs['esname'] = $request['esname'][$i];
            $owner_inputs['bsname'] = $request['bsname'][$i];
            $owner_inputs['efname'] = $request['efname'][$i];
            $owner_inputs['bfname'] = $request['bfname'][$i];
            $owner_inputs['emname'] = $request['emname'][$i];
            $owner_inputs['bmname'] = $request['bmname'][$i];

            $primisis_license->owners()->create($owner_inputs);
            
        }
        return redirect()->route('home');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @request \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @request \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @request \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @request \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
