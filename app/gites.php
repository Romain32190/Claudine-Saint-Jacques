<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gites extends Model
{
    public function step() {
    	return $this->belongsTo('App\Step');
    }
}
