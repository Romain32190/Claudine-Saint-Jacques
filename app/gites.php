<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gites extends Model
{
    public function step() {
    	return $this->belongsTo('App\Step');
    }

    public function address() {
    	return $this->belongsTo('App\address');
    }
}
