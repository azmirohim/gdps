<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\InternsRequest;
use app\Interns;
use app\File;
use Storage;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;

class InternController extends Controller
{
    public function internship(){
        return view('internship');
    }

    public function submitint(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3|max:100',
            'univ' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'nomor' => 'required|numeric',
            //files
            'cv' => 'required|file|mimes:pdf|max:2048',

            'ktp' => 'required|image|max:2048',
            'ktm' => 'required|image|max:2048',
            'proposal' => 'required|file|mimes:pdf|max:2048',
            'surat' => 'required|file|mimes:pdf|max:2048',
        ]);

        $file = $request->file('pas');
		$nama_file = $file->getClientOriginalName();
		$tujuan_upload = 'image';
        $file->move($tujuan_upload,$nama_file);

        $cv = $request->file('cv');
		$nama_cv = $cv->getClientOriginalName();
		$tujuan_upload = 'image';
        $cv->move($tujuan_upload,$nama_cv);

        $ktp = $request->file('ktp');
		$nama_ktp = $ktp->getClientOriginalName();
		$tujuan_upload = 'image';
        $ktp->move($tujuan_upload,$nama_ktp);

        $ktm = $request->file('ktm');
		$nama_ktm = $ktm->getClientOriginalName();
		$tujuan_upload = 'image';
        $ktm->move($tujuan_upload,$nama_ktm);

        $proposal = $request->file('proposal');
		$nama_proposal = $proposal->getClientOriginalName();
		$tujuan_upload = 'image';
        $proposal->move($tujuan_upload,$nama_proposal);

        $surat = $request->file('surat');
		$nama_surat = $surat->getClientOriginalName();
		$tujuan_upload = 'image';
		$surat->move($tujuan_upload,$nama_surat);

        DB::table('intern')->insert([
            'name' => $request->name,
            'univ' => $request->univ,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'pas' => $nama_file,
            'cv' => $nama_cv,
            'ktp' => $nama_ktp,
            'ktm' => $nama_ktm,
            'proposal' => $nama_proposal,
            'surat' => $nama_surat,
        ]);

            return back()->with('success','Berhasil submit!');

    }


}
