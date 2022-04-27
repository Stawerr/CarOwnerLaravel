<?php

namespace App;
use App\Owner;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Owners()
    {
        return $this->HasMany(Owner::Class);
    }
}
