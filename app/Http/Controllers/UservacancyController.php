<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;
use App\Admvacancy;
use App\Pelamar;


class UservacancyController extends Controller
{
    public function uservacancy(){
        $vac = Admvacancy::all()->sortByDesc('date');
        return view('page.vacancy',['vac' => $vac]);
    }
    public function register(){
        return redirect('vacancy')->with('success','Verify berhasil silahkan login untuk mengisi data');
    }

    public function detilvac($id){
        $detil = DB::table('vacancy')->where('id',$id)->get();
        return view('page.detailvacancy',['detil' => $detil]);
    }
    
   

}
