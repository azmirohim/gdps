<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;
use App\Admvacancy;

class AdmvacancyController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    
    public function admVacancy()
    {
        $vacancy = Admvacancy::all()->sortByDesc('tanggal');
        // $tgl = $vacancy->tanggal;
        // $dat = date_diff(date_create('$tgl'),date_create())->days;
    	return view('adminPage.admvacancy',['vacancy' => $vacancy]);
    }

    public function submitvac(Request $request){
        $message=[
            'required' => 'Ada yang belum diisi cuy',
        ];
        $this->validate($request,[
            'judul' => ['required','string'],
            'deskripsi' => ['required','string'],
            'requirement' => ['required','string'],
            'tanggal' => ['required','string'],
            'jenis' => ['required','string'],
        ],$message);
        DB::table('vacancy')->insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'requirement' => $request->requirement,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
        ]);
        return back()->with('success','Berhasil submit');
    }

    public function editvac($id){
        $vacancyy = DB::table('vacancy')->where('id',$id)->get();
        return view('adminPage.editvacancy',['vacancyy' => $vacancyy]);
    }

    public function update(Request $request){
	// update data pegawai
    $message=[
        'required' => 'Ada yang belum diisi cuy',
    ];
    $this->validate($request,[
        'judul' => ['required','string'],
        'deskripsi' => ['required','string'],
        'requirement' => ['required','string'],
        'tanggal' => ['required','string'],
        'jenis' => ['required','string'],
    ],$message);
    DB::table('vacancy')->where('id',$request->id)->update([
		'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'requirement' => $request->requirement,
        'tanggal' => $request->tanggal,
        'jenis' => $request->jenis,
	]);
	// alihkan halaman ke halaman pegawai
	return back()->with('success','Berhasil update cuy');
    }

    public function hapusvac($id){
        DB::table('vacancy')->where('id',$id)->delete();
        return redirect('/admin-vacancy')->with('success','Berhasil dihapus');
    }
}
