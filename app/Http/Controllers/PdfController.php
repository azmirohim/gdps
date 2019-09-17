<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormRequest;
use App\Files;
use App\StudyRecruit;
use App\Interns;
// use App\ExcelForm;
use App\PdfForm;

use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\RedirectResponse;
use App\FormRecruit;
use Carbon\Carbon;
use App\Http\Requests\FileRequest;
use App\Export\FormReport;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Pdf\Facades\Pdf;

class PdfController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        DB::table('pdf_form')->delete();
        $formRecruit = DB::table('form_recruit')->paginate(8);
        $form = DB::table('form_recruit')->get();
        foreach ($form as $fr){
            $id = $fr->id;
            $name = $fr->name;
            $nat = $fr->nationality;
            $bd = $fr->born_date;
            $um = date_diff(date_create(),date_create($fr->born_date))->y;
            $pend = $fr->pendidikan;
            $je = $fr->jenis;
            $job = $fr->job;
            $nik = $fr->nik;
            $sk = $fr->sekolah;
            $ni = $fr->nilai;
            $em = $fr->email;
            $ph = $fr->phone;
            $adr = $fr->address;
            $jr = $fr->jurusan;
            DB::table('pdf_form')->insert([
                'id' => $id,
                'name' => $name,
                'nationality' => $nat,
                'born_date' => $bd,
                'umur' => $um,
                'pendidikan' => $pend,
                'jenis' => $je,
                'job' => $job,
                'nik' => $nik,
                'sekolah' => $sk,
                'nilai' => $ni,
                'email' => $em,
                'phone' => $ph,
                'address' => $adr,
                'jurusan' => $jr,
            ]);
        };

    	return view('adminPage.dashboard', [
    		'formRecruit' => $formRecruit,
    	]);
    }

    public function detail(FormRecruit $formRecruit)
    {
    	$files = Files::ofFormRecruit($formRecruit)->orderBy('pas', 'ASC')->paginate(30);

    	return view('adminPage.detail', [
    		'formRecruit' => $formRecruit,
    		'files' => $files,
    	]);
    }

    public function delete(FormRecruit $formRecruit)
    {
        $files = Files::ofFormRecruit($formRecruit)->delete();
        $formRecruit->delete();
    	return redirect()->route('admin.dash');
    }
        /**
     * Download file directly.
     *
     * @param File $file
     * @return void
     */

    public function download(Files $file, FileRequest $request)
    {
        return Storage::download('image/'.$file->pas);
    }
    public function downloadcv(Files $file, FileRequest $request)
    {
        return Storage::download('image/'.$file->cv);
    }
    public function downloadktp(Files $file, FileRequest $request)
    {
        return Storage::download('image/'.$file->ktp);
    }
    public function downloadprop(Files $file, FileRequest $request)
    {
        return Storage::download('image/'.$file->others);
    }
    // public function download(Files $file, FileRequest $request)
    // {
    // 	return Storage::download($file->filename, $file->title);
    // }

    public function cari(Request $request){
        $cari = $request->cari;
        DB::table('pdf_form')->delete();
        $formRecruit = FormRecruit::
        where('name','like',"%".$cari."%")
        ->orwhere('nationality','like',"%".$cari."%")
        ->orwhere('pendidikan','like',"%".$cari."%")
        ->orwhere('jurusan','like',"%".$cari."%")
        ->orwhere('job','like',"%".$cari."%")
        ->orwhere('jenis','like',"%".$cari."%")
        ->paginate(10);
        foreach ($formRecruit as $fr){
            $id = $fr->id;
            $name = $fr->name;
            $nat = $fr->nationality;
            $bd = $fr->born_date;
            $um = $fr->umur;
            $pend = $fr->pendidikan;
            $je = $fr->jenis;
            $job = $fr->job;
            $nik = $fr->nik;
            $sk = $fr->sekolah;
            $ni = $fr->nilai;
            $em = $fr->email;
            $ph = $fr->phone;
            $adr = $fr->address;
            $jr = $fr->jurusan;
            DB::table('pdf_form')->insert([
                'id' => $id,
                'name' => $name,
                'nationality' => $nat,
                'born_date' => $bd,
                'umur' => $um,
                'pendidikan' => $pend,
                'jenis' => $je,
                'job' => $job,
                'nik' => $nik,
                'sekolah' => $sk,
                'nilai' => $ni,
                'email' => $em,
                'phone' => $ph,
                'address' => $adr,
                'jurusan' => $jr,
            ]);
        };

        return view('adminPage.dashboard', [
    		'formRecruit' => $formRecruit,
    	]);
    }


     //COBA DENGAN PHP
     public function pdf(){
        $pdf = DB::table('pdf_form')->get();
        return view('adminPage.exportpdf',['pdf' =>$pdf]);
    }

    // PDF ASLI
    // public function pdf(){
    //     return Excel::download(new FormReport, 'E-Rekrutmen.xlsx');
    // }


}
