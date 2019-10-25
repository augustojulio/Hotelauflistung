<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function accomodation()
    {
      return $this->belongsTo(Accomodation::class);
    }
}
