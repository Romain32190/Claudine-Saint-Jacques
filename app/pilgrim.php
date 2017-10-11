<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class pilgrim extends Model
{

    protected $fillable=['name', 'firstname'];

    public function luggages (){

      return $this->hasMany(pilgrim::class);
    }
}
