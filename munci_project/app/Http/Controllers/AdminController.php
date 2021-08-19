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
    public function notice(){
        
        $notices = Notice::paginate(3);
        // $notices = Notice::all();
        return view('admin.notice',['notices'=> $notices]);
    }



    public function notice_form_store(Request $request){
        $inputs['content'] = $request['content'];

        if($request->file()){
            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $inputs['file'] = $file->storeAs('notice', $originalname);

        }
        $notice = new Notice($inputs);
        $notice->save();
        return redirect()->back();
    }

    public function notice_delete($id)
    {
        //
       $delete_notice = Notice::find($id);
       $delete_notice->delete();
       return redirect()->back();
        
    }
    public function notice_edit($id)
    {
        //
        $notice = Notice::find($id);
        return view('admin.edit_notice',['notice' => $notice]);
        
    }
    public function notice_update(Request $request,$id)
    {
        //
        $inputs = Notice::find($id);
        $inputs['content'] = $request['content'];
        if($request->file()){

            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $inputs['file'] = $file->storeAs('notice', $originalname);
        }

        $inputs->update($inputs->all());
        return redirect()->route('admin.notice');
        
    }

    public function shokol_notice()
    {
        $notices = Notice::paginate(3);
  
        return view('admin.shokol_notice',['notices'=> $notices]);
    }

   

}
