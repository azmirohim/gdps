<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class LupaSandi extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        
    }

    public function build(Request $request)
    {
        $email = $request->email;
        
        $lupa = DB::table('users')->where('email',$email)->first();
        $pass = $lupa->password;
        $nama = $lupa->name;
        $pas = Hash::make($lupa->password);

        return $this->view('lupa')->with(['pass'=>$pas, 'nama'=>$nama]);
    }
}
