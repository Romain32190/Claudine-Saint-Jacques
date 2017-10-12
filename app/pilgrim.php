<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\luggages;

class pilgrim extends Model
{

    protected $fillable=['name', 'firstname', 'id_address'];


    public function luggages (){

      // return $this->hasMany('luggages', 'id_pilgrims');
    	return $this->hasMany('App\luggages', 'id_pilgrims','id');
    }

    public function address (){
      return $this->hasOne('App\address' ,'id','id_address');
    }
}
