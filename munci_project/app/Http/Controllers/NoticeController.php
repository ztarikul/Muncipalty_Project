<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //

    public function notice(){
        
        $notices = Notice::paginate(3);
        // $notices = Notice::all();
        return view('admin.notice.notice',['notices'=> $notices]);
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
        return view('admin.notice.edit_notice',['notice' => $notice]);
        
    }

    
    public function notice_update(Request $request,$id)
    {
        //
        $notice = Notice::find($id);
        $notice['content'] = $request['content'];
        if($request->file()){

            $file = $request->file('file');
            $originalname = $file->getClientOriginalName();
            $notice['file'] = $file->storeAs('notice', $originalname);
        }

        $notice->update();
        return redirect()->route('admin.notice');
        
    }

    public function shokol_notice()
    {
        $notices = Notice::paginate(3);
  
        return view('admin.notice.shokol_notice',['notices'=> $notices]);
    }

    public function pouroshavar_tottho()
    {
  
        return view('admin.notice.pouroshavar_tottho');
    }

}
