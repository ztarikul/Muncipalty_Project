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
        
        $validator = $request->validate([
            'nationid' => 'nullable|unique:cityzens',
            'birth_certificate_no' => 'required|unique:cityzens',
            'passport_no' => 'nullable|unique:cityzens',
            'mob' => 'required|unique:cityzens',
            'email' => 'nullable|unique:cityzens'


        ]);
        dd($validator);

        if(!$validator){
            return response()->json(['status' => 0, 'error' => $validator]);
        }
        // $cityzens = new Cityzen($validator);
        // $cityzens->save();
        // return redirect()->route('home');
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
