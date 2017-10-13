<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    protected $fillable = ['name', 'firstname', 'drivingLicence', 'id_address', 'id_vehicles', 'active', 'available'];

    public function address() {

      return $this->belongsTo('App\address', 'id_address');

    }

    public function vehicles(){
      return $this->belongsTo('App\vehicles', 'id_vehicles');
    }


}
