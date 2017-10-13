<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{

    protected $fillable=['brand','type','vehicleRegistration','capacity','maxLuggages','maxWeight','minWeight','insuranceNumber','technicalControl'];

    public function drivers() {
      return $this->hasMany(drivers::class);
    }
}
