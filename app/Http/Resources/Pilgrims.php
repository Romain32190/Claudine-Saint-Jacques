<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Pilgrims extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'firstname' => $this->firstname,
            'address' => $this->address,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'luggages' => $this->luggages
        ];

    }
}
