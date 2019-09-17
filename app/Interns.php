<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interns extends Model
{
    protected $table = 'intern';
    protected $guarded = ['id'];
    protected $appeds = ['avatar'];

    public function file()
    {
        return $this->hasMany('App\File', 'name_id');
    }
}
