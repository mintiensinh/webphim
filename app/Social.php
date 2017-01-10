<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
	public $table = "social";
    protected $fillable = [
        'name', 'email','nickname','avatar','social_id'
    ];
    protected $hidden = [
        'token'
    ];
}
