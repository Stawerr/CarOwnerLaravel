<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Brand extends Model
{
    public function Cars()
    {
        return $this->HasMany(Car::Class);
    }
}
