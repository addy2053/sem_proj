<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    public function user()
    {
       return $this->belongsTo('App\User');
    }
    public function hall()
    {
        return $this->belongsTo('App\Hall');
    }
}
