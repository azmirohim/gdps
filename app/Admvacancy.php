<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admvacancy extends Model
{
    protected $table = 'vacancy';
    protected $guarded = ['id'];
    protected $fillable = ['judul','deskripsi','requirement','tanggal','jenis'];
    
}
