<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mange extends Model
{
    protected $appends = [];

    // public function Studen()
    // {
    //     return $this->hasMany(Studen::class);
    // }

    // public function getArAbsAttribute()
    // {
    //     return $this->Studen()->where('note', 1)->where('total', '>=', 140)->get(['total', 'mange_id', 'gender_id'])->groupBy(['total', 'mange_id', 'gender_id'])->count();
    // }
}
