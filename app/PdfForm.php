<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfForm extends Model
{
    protected $table = 'pdf_form';
    protected $fillable = ['id','name','nationality','nik','born_date','umur','pendiidkan','jurusan','nilai','sekolah','jenis','job','email','phone','address'];
}
