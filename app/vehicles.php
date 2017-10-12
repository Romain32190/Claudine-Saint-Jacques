<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{

    // public function drivers() {
    //
    //     return $this->belongsTo(drivers::class);
    // }

    public function drivers() {
      return $this->hasOne(drivers::class);
    }
}
