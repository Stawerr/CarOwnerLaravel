<?php

namespace App;
use App\Owner;
use App\Brand;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function Owner()
    {
        return $this->belongsTo(Owner::Class);
    }
    public function Brand()
    {
        return $this->belongsTo(Brand::Class);
    }
}
