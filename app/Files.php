<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable = ['name_id', 'pas', 'cv','ktp','others'];

    public function user()
	{
		return $this->belongsTo('App\FormRecruit');
	}

	public function scopeofFormRecruit($query, FormRecruit $fr) {
		return $query->where('name_id', $fr->id);
	}
}
