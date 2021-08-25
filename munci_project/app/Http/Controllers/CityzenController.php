<?php

namespace App\Http\Controllers;

use App\Models\Cityzen;
use Illuminate\Http\Request;

class CityzenController extends Controller
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
        $inputs = $request->validate([
            'bcno' => 'required|unique:cityzens',
            'pno' => 'nullable|unique:cityzens',
            'nationid' => 'nullable|unique:cityzens',
            'mob' => 'required|min:11|max:11|unique:cityzens'
        ]);
        if($request->file()){
            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $inputs['file'] = $file->storeAs('ngorik', $originalname);
        }
        
        
        $inputs['delivery_type'] = $request['delivery_type'];
       
        $inputs['holding_no'] = $request['holding_no'];
        $inputs['nationid'] = $request['nationid'];
        $inputs['bcno'] = $request['bcno'];
        $inputs['pno'] = $request['pno'];
        $inputs['dofb'] = $request['dofb'];  
        $inputs['ename'] = $request['ename'];  
        $inputs['bname'] = $request['bname'];
        $inputs['gender'] = $request['gender'];
        $inputs['mstatus'] = $request['mstatus'];
        $inputs['eWname'] = $request['eWname'];
        $inputs['bWname'] = $request['bWname'];
        $inputs['eHname'] = $request['eHname'];
        $inputs['bHname'] = $request['bHname'];
        $inputs['efname'] = $request['efname'];
        $inputs['bfname'] = $request['bfname'];
        $inputs['emname'] = $request['emname'];
        $inputs['bmnane'] = $request['bmnane'];
        $inputs['ocupt'] = $request['ocupt'];
        $inputs['qualification'] = $request['qualification'];
        $inputs['religion'] = $request['religion'];
        $inputs['bashinda'] = $request['bashinda'];
        $inputs['p_gram'] = $request['p_gram'];
        $inputs['p_rbs'] = $request['p_rbs'];
        $inputs['p_wordno'] = $request['p_wordno'];
        $inputs['p_postof'] = $request['p_postof'];
        $inputs['p_thana'] = $request['p_thana'];
        $inputs['p_upazila'] = $request['p_upazila'];
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
        $inputs['mob'] = $request['mob'];
        $inputs['email'] = $request['email'];
        $inputs['attachment_en'] = $request['attachment_en'];
        $inputs['attachment_bn'] = $request['attachment_bn'];
        $inputs['status'] = $request['status'];
        $inputs['seba'] = $request['seba'];
        
        $cityzens = new Cityzen($inputs);
        $cityzens->save();
        
        return view('sonod.nagoriksonod.sonod',['cityzens'=> $cityzens]);
        // return redirect()->back();
        
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
