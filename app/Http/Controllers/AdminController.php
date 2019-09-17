<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;
use App\Http\Requests\FileRequest;
use App\Export\FormReport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function admin(){
        $admin = DB::table('users')->get();
        return view('adminPage.adminregistor',['admin'=>$admin]);
    }

    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin-register')->with('success','Berhasil dihapus');
    }
    
    public function edit($id){
        $admin = DB::table('users')->where('id',$id)->get();
        return view('adminPage.edituser',['admin'=>$admin]);
    }
    public function update(request $request){
        $this->validate($request,[
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        
        DB::table('users')->where('id',$request->id)->update([
            'password' => Hash::make($request['password'])
        ]);
        return back()->with('success','Password berhasil diganti');
    }
    

}
