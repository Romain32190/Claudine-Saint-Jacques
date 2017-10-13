<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class pilgrim extends Model
{
    protected $fillable=['name', 'firstname', 'id_address','active'];

    public function luggages (){

      return $this->hasMany(luggages::class);
    }

    public function address (){
      return $this->belongsTo('App\address', 'id_address');
    }
}
