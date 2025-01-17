<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }
}
