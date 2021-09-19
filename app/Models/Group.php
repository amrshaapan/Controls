<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $appends = ['ar', 'en', 'stu', 'math_g', 'total_math', 'sci', 'arabs', 'enabs', 'sciabs', 'stuabs', 'mathhabs', 'mathgabs'];
    // protected $appends = ['ar', 'arabs',];
    // public function Group()
    // {
    //     return $this->belongsTo(Studen::class, 'group', 'id');
    // }


    public function Studen()
    {
        return $this->hasMany(Studen::class, 'group', 'id');
    }

    public function getArAttribute()
    {
        return $this->Studen()->where('note', 0)->where('ar', '<=', 39)->count();
    }
    public function getArAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where('ar', '-1')->count();
    }

    public function getEnAttribute()
    {
        return $this->Studen()->where('note', 0)->where('en', '<=', 29)->count();
    }
    public function getEnAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where('en', '=', -1)->count();
    }
    public function getStuAttribute()
    {
        return $this->Studen()->where('note', 0)->where('stu', '<=', 19)->count();
    }
    public function getStuAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where('stu', '=', -1)->count();
    }
    public function getMathGAttribute()
    {
        return $this->Studen()->where('note', 0)->where('math_g', '<=', 7)->count();
    }

    public function getMathGAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where(
            'math_g',
            '=',
            -1
        )->count();
    }
    public function getTotalMathAttribute()
    {
        return $this->Studen()->where('note', 0)->where('total_math', '<=', 29)->count();
    }
    public function getMathHAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where('math_h', '=', -1)->count();
    }
    public function getSciAttribute()
    {
        return $this->Studen()->where('note', 0)->where('sci', '<=', 19)->count();
    }
    public function getSciAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('abs_2', 1)->where('sci', '=', -1)->count();
    }
}
