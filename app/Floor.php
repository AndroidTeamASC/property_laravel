<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    //
    protected $fillable = [
        'property_id','floor_image'
    ];

   public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
