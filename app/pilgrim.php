<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\luggages;

class pilgrim extends Model
{
    protected $fillable=['name', 'firstname', 'id_address','active'];


    public function luggages (){

    	return $this->hasMany('App\luggages', 'id_pilgrims','id');
    }

    public function address (){
      return $this->belongsTo('App\address', 'id_address');
    }
}
