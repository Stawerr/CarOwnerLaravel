<?php

namespace App;
use App\Country;
use App\Car;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function Country()
    {
        return $this->belongsTo(Country::Class);
    }
    public function Cars()
    {
        return $this->hasMany(Car::Class);
    }
}
