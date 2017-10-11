<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    public function address() {

      return $this->hasOne(address::class);

    }

    public function vehicles(){
      return $this->belongsTo(vehicles::class);
    }


}
