<?php

namespace App\Http\Controllers;

use App\Models\OarishSanad;
use Illuminate\Http\Request;

class OarishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);


            $inputs['delivery_type'] = $request['delivery_type'];
            $inputs['nationid'] = $request['nationid'];
            $inputs['bcno'] = $request['bcno'];
            $inputs['holding_no'] = $request['holding_no'];
            $inputs['dofb'] = $request['dofb'];
            $inputs['ename'] = $request['ename'];
            $inputs['bname'] = $request['bname'];
            $inputs['gender'] = $request['gender'];
            $inputs['mstatus'] = $request['mstatus'];
            $inputs['ewname'] = $request['ewname'];
            $inputs['bwname'] = $request['bwname'];
            $inputs['ehname'] = $request['ehname'];
            $inputs['bhname'] = $request['bhname'];
            $inputs['efname'] = $request['efname'];
            $inputs['bfname'] = $request['bfname'];
            $inputs['emname'] = $request['emname'];
            $inputs['bmane'] = $request['bmane'];
            $inputs['flive'] = $request['flive'];
            $inputs['fyears'] = $request['fyears'];
            $inputs['mlive'] = $request['mlive'];
            $inputs['myears'] = $request['myears'];
            $inputs['ocupt'] = $request['ocupt'];
            $inputs['bashinda'] = $request['bashinda'];
            $inputs['p_gram'] = $request['p_gram'];
            $inputs['p_rbs'] = $request['p_rbs'];
            $inputs['p_wordno'] = $request['p_wordno'];
            $inputs['p_postof'] = $request['p_postof'];
            $inputs['p_thana'] = $request['p_thana'];
            $inputs['p_upzila'] = $request['p_upzila'];
            $inputs['p_dis'] = $request['p_dis'];
            $inputs['pb_gram'] = $request['pb_gram'];
            $inputs['pb_rbs'] = $request['pb_rbs'];
            $inputs['pb_wordno'] = $request['pb_wordno'];
            $inputs['pb_postof'] = $request['pb_postof'];
            $inputs['pb_thana'] = $request['pb_thana'];
            $inputs['pb_upazila'] = $request['pb_upazila'];
            $inputs['pb_dis'] = $request['pb_dis'];
            $inputs['per_gram'] = $request['per_gram'];
            $inputs['per_rbs'] = $request['per_rbs'];
            $inputs['per_wordno'] = $request['per_wordno'];
            $inputs['per_postof'] = $request['per_postof'];
            $inputs['per_thana'] = $request['per_thana'];
            $inputs['per_upazila'] = $request['per_upazila'];
            $inputs['per_dis'] = $request['per_dis'];
            $inputs['perb_gram'] = $request['perb_gram'];
            $inputs['perb_rbs'] = $request['perb_rbs'];
            $inputs['perb_wordno'] = $request['perb_wordno'];
            $inputs['perb_postof'] = $request['perb_postof'];
            $inputs['perb_thana'] = $request['perb_thana'];
            $inputs['perb_upazila'] = $request['perb_upazila'];
            $inputs['perb_dis'] = $request['perb_dis'];
            $inputs['english_applicant_name'] = $request['english_applicant_name'];
            $inputs['bangla_applicant_name'] = $request['bangla_applicant_name'];
            $inputs['english_applicant_father_name'] = $request['english_applicant_father_name'];
            $inputs['bangla_applicant_father_name'] = $request['bangla_applicant_father_name'];
            $inputs['mob'] = $request['mob'];
            $inputs['email'] = $request['email'];
            $inputs['status'] = $request['status'];

        
            
        $oarish_sanad = new OarishSanad($inputs);
        $oarish_sanad->save();
        // dd($oarish_sanad);

        $array_size = count($request['w_name']);

        for($i=0; $i<$array_size; $i++){

            
            $oarish_inputs['w_name'] = $request['w_name'][$i];
            $oarish_inputs['w_name_en'] = $request['w_name_en'][$i];
            $oarish_inputs['w_relation'] = $request['w_relation'][$i];
            $oarish_inputs['w_relation_en'] = $request['w_relation_en'][$i];
            $oarish_inputs['w_age'] = $request['w_age'][$i];
            $oarish_sanad->oarishgon()->create($oarish_inputs);
        }
    
        return view('sonod.warishsonod',['oarish_sanad'=>  $oarish_sanad]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
