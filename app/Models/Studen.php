<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studen extends Model
{
    public $timestamps = false;
    /**
     * Get all of the comments for the Studen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function School()
    {
        return $this->belongsTo(School::class, 'school_id', 'code');
    }
    public function Committee()
    {
        return $this->belongsTo(Committee::class);
    }

    public function Gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function Religion()
    {
        return $this->belongsTo(Religion::class);
    }
    public function Merge()
    {
        return $this->belongsTo(Merge::class);
    }
    public function Mange()
    {
        return $this->belongsTo(Mange::class);
    }
}
