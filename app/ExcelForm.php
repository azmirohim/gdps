<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelForm extends Model
{
    protected $table = 'excel_form';
    protected $fillable = ['id','name','nationality','nik','born_date','umur','pendiidkan','jurusan','nilai','sekolah','jenis','job','email','phone','address'];
}
