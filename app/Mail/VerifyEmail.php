<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        
    }

    public function build(Request $request)
    {
        $nama = $request->name_lamar;
       return $this->from('coba@gmail.com')
                   ->view('emailpelamar')->with(['nama'=>$nama]);
    }
}
