<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable=['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile'];

    public function pilgrim(){

      return $this->belongsTo(pilgrim::class);
    }

}
