<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use App\FormRecruit;
use App\StudyRecruit;
use App\Files;
use App\Admvacancy;
use App\Sekolah;
use Storage;
use Validator;
use ZipArchive;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Auth\AuthManager;
use App\Mail\SubmitData;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
	// public function __construct(){
	// 	$this->middleware(['auth','verified']);
	// }

	public function form(){
		$job = Admvacancy:: where('jenis','JOB')->get();
    	return view('form',['job' => $job]);
	}
	public function formint(){
		$intern = Admvacancy:: where('jenis','INTERNSHIP')->get();
    	return view('formint',['intern'=>$intern]);
	}
	public function bank(){
		return view('bankdata');
	}

    public function submit(FormsRequest $request){

		$day = $request->input('born_date');
		$umur = date_diff(date_create(),date_create($day))->y;
		$nama = $request->name;
		$verif = DB::table('form_recruit')->where('name',$nama)->first();
		if ($verif){
			if($verif->job == $request->input('job')){
				return back()->with('alert', 'Anda sudah pernah melamar di lowongan yang sama');
			}
			else{
				$un = $verif->unik;
			$blm = 'sudah';

			}
		}
		else {
			$un = 'BELUM';
			$blm = 'Belum';

		}
		$formRecruit = FormRecruit::create([
		 'name' => $request->input('name'),
		 'unik' => $un,
    	 'nationality' => $request->input('nationality'),
		 'born_date' => $request->input('born_date'),
		 'umur' => $umur,
		 'jenis' => $request->input('jenis'),
		 'job' => $request->input('job'),
		 'nik' => $request->input('nik'),
		 'sekolah' => $request->input('sekolah'),
		 'nilai' => $request->input('nilai'),
    	 'email' => $request->input('email'),
    	 'phone' => $request->input('phone'),
		 'address' => $request->input('address'),
		 'pendidikan' => $request->input('pendidikan'),
		 'jurusan' => $request->input('jurusan'),
		]);
		//$unik = $verif->unik_id;
		if($blm == 'Belum'){
			$id = FormRecruit::max('id');
			$veri = DB::table('form_recruit')->where('name',$nama)->update(['unik'=>$id]);
		}
		else {
			$id = $verif->unik;
		}

		//pas
		$file = $request->file('pas');
		$nama_file = $id.' PAS FOTO.jpg';
		$tujuan_upload = 'image';
		$store = $file->storeAs('image',$nama_file);
		$file->move($tujuan_upload,$nama_file);
		//cv
		$file_cv = $request->file('cv');
		$nama_cv = $id.' CV.pdf';
		$tujuan_upload = 'image';
		$store_cv = $file_cv->storeAs('image',$nama_cv);
		//$file_cv->move($tujuan_upload,$nama_cv);
		//ktp
		$file_ktp = $request->file('ktp');
		$nama_ktp = $id.' KTP.jpg';
		$tujuan_upload = 'image';
		$store_ktp = $file_ktp->storeAs('image',$nama_ktp);
		//$file_ktp->move($tujuan_upload,$nama_ktp);
		//others
		$file_others = $request->file('others');
		$nama_others = 'KOSONG';
		$tujuan_upload = 'image';

		$files = Files::create([
			'name_id' => $id,
			'pas' => $nama_file,
			'cv' => $nama_cv,
			'ktp' => $nama_ktp,
			'others' => $nama_others
		]);
		$email = $request->input('email');
		return back()->with('success', 'Terimakasih sudah mengisi data');
	}

	public function submitint(FormsRequest $request){

		$day = $request->input('born_date');
		$umur = date_diff(date_create(),date_create($day))->y;
		$formRecruit = FormRecruit::create([
    	 'name' => $request->input('name'),
    	 'nationality' => $request->input('nationality'),
		 'born_date' => $request->input('born_date'),
		 'umur' => $umur,
		 'jenis' => $request->input('jenis'),
		 'job' => $request->input('job'),
		 'nik' => $request->input('nik'),
		 'sekolah' => $request->input('sekolah'),
		 'nilai' => $request->input('nilai'),
    	 'email' => $request->input('email'),
    	 'phone' => $request->input('phone'),
		 'address' => $request->input('address'),
		 'pendidikan' => $request->input('pendidikan'),
		 'jurusan' => $request->input('jurusan'),
    	]);

		$id = FormRecruit::max('id');
		//pas
		$file = $request->file('pas');
		$nama_file = $id.' PAS FOTO.jpg';
		$tujuan_upload = 'image';
		$store = $file->storeAs('image',$nama_file);
		$file->move($tujuan_upload,$nama_file);
		//cv
		$file_cv = $request->file('cv');
		$nama_cv = $id.' CV.pdf';
		$tujuan_upload = 'image';
		$store_cv = $file_cv->storeAs('image',$nama_cv);
		//$file_cv->move($tujuan_upload,$nama_cv);
		//ktp
		$file_ktp = $request->file('ktp');
		$nama_ktp = $id.' KTP.jpg';
		$tujuan_upload = 'image';
		$store_ktp = $file_ktp->storeAs('image',$nama_ktp);
		//$file_ktp->move($tujuan_upload,$nama_ktp);
		//others
		$file_others = $request->file('others');
		$nama_others = $id.' PROPOSAL.pdf';
		$tujuan_upload = 'image';
		$store_others = $file_others->storeAs('image',$nama_others);
		//$file_others->move($tujuan_upload,$nama_others);

		$files = Files::create([
			'name_id' => $id,
			'pas' => $nama_file,
			'cv' => $nama_cv,
			'ktp' => $nama_ktp,
			'others' => $nama_others
		]);
		$email = $request->input('email');
        Mail::to("$email")->send(new SubmitData());
            return back()->with('success', 'Terimakasih sudah mengisi data');
	}
}
