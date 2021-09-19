<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $appends = ['school_Count', 'gender_m', 'gender_f', 'system_n', 'system_m', 'religioni_slam', 'religion_m'];
    public function Studen()
    {
        return $this->hasMany(Studen::class);
    }
    public function School()
    {
        return $this->hasMany(School::class);
    }
    public function getSchoolCountAttribute()
    {
        return $this->Studen()->count();
    }

    public function getGenderMAttribute()
    {
        return $this->Studen()->where('gender_id', 1)->count();
    }

    public function getGenderFAttribute()
    {
        return $this->Studen()->where('gender_id', 2)->count();
    }

    public function getSystemNAttribute()
    {
        return $this->Studen()->where('system_id', 1)->count();
    }
    public function getSystemMAttribute()
    {
        return $this->Studen()->where('system_id', 2)->count();
    }
    public function getReligioniSlamAttribute()
    {
        return $this->Studen()->where('religion_id', 1)->count();
    }
    public function getReligionMAttribute()
    {
        return $this->Studen()->where('religion_id', 2)->count();
    }
}
