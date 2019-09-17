<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name_id', 'title', 'filename'];

    public function user()
	{
		return $this->belongsTo('App\Intern');
	}

	public function scopeofIntern($query, Intern $fr) {
		return $query->where('name_id', $fr->id);
	}
}
