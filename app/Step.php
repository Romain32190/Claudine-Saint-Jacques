<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public $timestamps = false;

    public function gites() {
    	return $this->hasMany('App\gites');
    }
}
