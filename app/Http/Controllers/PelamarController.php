<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Mail\VerifyEmail;
use App\Mail\LupaPass;
use App\Mail\LupaSandi;
use Illuminate\Support\Facades\Mail;
use App\Pelamar;
use Alert;
use App\Admvacancy;

class PelamarController extends Controller
{
    protected $redirectTo = '/form';

    // public function __construct(){
    //     $this->middleware('guest:pelamar')->execpt('index');
    // }

    public function index(){
        return view('vacancy');
    }

    protected function guard(){
        return Auth::guard('pelamar');
    }

    public function lamar(Request $request){
        $message=[
            'min' => 'Password minimal 6 karakter',
            'unique' => 'Email sudah terpakai',
            'confirmed' => 'Konfirmasi password salah'
        ];
        $this->validate($request,[
            'name_lamar' => ['required', 'string', 'max:255'],
            'email_lamar' => ['required', 'string', 'email', 'max:255', 'unique:pelamar'],
            'pass_lamar' => ['required', 'string', 'min:6', 'confirmed'],
        ],$message);
        DB::table('pelamar')->insert([
            'name_lamar' => $request->name_lamar,
            'email_lamar' => $request->email_lamar,
            'pass_lamar' => $request->pass_lamar,
        ]); 

        $email = $request->email_lamar;
        Mail::to("$request->email_lamar")->send(new VerifyEmail());
        return redirect('vacancy')->with('success','Registrasi berhasil lihat email anda');
    }

    public function lupa(Request $request){
        $email = $request->email_lamar;
        $lupa = DB::table('pelamar')->where('email_lamar',$email)->first();
        if($lupa){
            Mail::to("$request->email_lamar")->send(new LupaPass());
            return redirect('vacancy')->with('success','Password sudah dikirim ke email anda');
        }
        else{
            return redirect('vacancy')->with('alert','Email tidak ada');
        }
    }
    public function showlupa(){
        return view('auth.resetpass');
    }
    public function lupapass(Request $request){
        $mail = $request->email;
        $lupa = DB::table('users')->where('email',$mail)->first();
        if($lupa){
            Mail::to("$request->email")->send(new LupaSandi());
            return redirect('lupa-pass')->with('success','Password sudah dikirim ke email anda');
        }
        else{
            return redirect('lupa-pass')->with('alert','Email tidak ada');
        }
    }

    public function logon(Request $request){
        $email = $request->email_lamar;
        $pass = $request->pass_lamar;

        $data = DB::table('pelamar')->where('email_lamar',$email)->first();
        if ($data){
            if($pass = $data->pass_lamar){
                return redirect('form')->with(['email'=>$email]);            
            }
            else{
                return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
            }
        }
        else{
            return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
        }
    }
    public function bank(Request $request){
        $email = $request->email_lamar;
        $pass = $request->pass_lamar;

        $data = DB::table('pelamar')->where('email_lamar',$email)->first();
        if ($data){
            if($pass = $data->pass_lamar){
                return redirect('bankdata')->with(['email'=>$email]);            
            }
            else{
                return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
            }
        }
        else{
            return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
        }
    }
    public function logonint(Request $request){
        $email = $request->email_lamar;
        $pass = $request->pass_lamar;

        $data = DB::table('pelamar')->where('email_lamar',$email)->first();
        if ($data){
            if($pass = $data->pass_lamar){
                // Session::put('login',TRUE);
                return redirect('formint')->with(['email'=>$email]);
            }
            else{
                return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
            }
        }
        else{
            return redirect('vacancy')->with('alert','Login gagal Password atau Email salah !!!');
        }
    }

    public function verify(Request $request){
        Mail::send(new VerifyEmail,['Pelamar'=>$request], function ($m) use ($request){
            $m->to($request->email_lamar)->subject('Email Verifikasi!');
        });
        // $mail = $request->email_lamar; 
        // Mail::to("$mail")->send(new VerifyEmail());
        return "Register berhasil silahkan cek email anda";
    }
}
