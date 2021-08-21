<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;


class AdminController extends Controller
{
    //

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function nagorik_home(){
        return view('admin.nagorik.nagorik_home');
    }
    public function oarish_home(){
        return view('admin.oarish.oarish_home');
    }
    public function license_home(){
        return view('admin.license.license_home');
    }
    public function prokoshol_home(){
        return view('admin.prokoshol.prokoshol_home');
    }
    public function member_home(){
        return view('admin.member.member_home');
    }
    public function prokolpo_home(){
        return view('admin.prokolpo.prokolpo_home');
    }


    
   

}
