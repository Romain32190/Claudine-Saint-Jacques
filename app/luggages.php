<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class luggages extends Model
{
    protected $fillable=['id_pilgrims','start','goal','startDate', 'weight'];

}
