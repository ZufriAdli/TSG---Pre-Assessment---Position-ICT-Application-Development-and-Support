<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $table = 'manufactures';

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
