<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function booked()
    {
        return $this->hasMany('App\Booked');
    }
    public function image()
{
    return $this->hasMany('App\Image');
}

}
