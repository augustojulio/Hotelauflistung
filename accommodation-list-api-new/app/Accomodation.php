<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function locations()
    {
      return $this->hasOne(Location::class);
    }
}
