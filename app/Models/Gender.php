<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{

    public function Studen()
    {
        return $this->belongsTo(Studen::class);
    }
}
