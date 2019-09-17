<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class LupaPass extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        
    }

    public function build(Request $request)
    {
        //$pass = hashing pass;  
        //$pas = $request->pass; 
        $email = $request->email_lamar;
        
        $lupa = DB::table('pelamar')->where('email_lamar',$email)->first();
        $pass = $lupa->pass_lamar;
        $nama = $lupa->name_lamar;
        $pas = Hash::needsRehash($lupa->pass_lamar);

        return $this->from('coba@gmail.com')
                   ->view('lupa')->with(['pass'=>$pass, 'nama'=>$nama]);
    }
}
