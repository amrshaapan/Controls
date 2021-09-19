<?php

namespace App\Models;

use App\Models\Committee;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * Get the Student that owns the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $appends = ['school_Count', 'gender_m', 'gender_f', 'system_n', 'system_m', 'religioni_slam', 'religion_m', 'ar', 'en', 'stu', 'math_g', 'total_math', 'sci', 'arabs', 'enabs', 'sciabs', 'stuabs', 'mathhabs', 'mathgabs', 'note', 'frist_sittings', 'last_sittings', 'abs_second_success_n', 'abs_second_success_m', 'abs_second_faill_m', 'abs_second_faill_n'];
    public function Studen()
    {
        return $this->hasMany(Studen::class, 'school_id', 'code');
    }


    public function getSchoolCountAttribute()
    {
        return $this->Studen()->where('note', 0)->count();
    }

    public function getGenderMAttribute()
    {
        return $this->Studen()->where('gender_id', 1)->where('note', 0)->count();
    }

    public function getGenderFAttribute()
    {
        return $this->Studen()->where('gender_id', 2)->where('note', 0)->count();
    }

    public function getSystemNAttribute()
    {
        return $this->Studen()->where('system_id', 1)->where('note', 0)->count();
    }
    public function getSystemMAttribute()
    {
        return $this->Studen()->where('system_id', 2)->where('note', 0)->count();
    }
    public function getReligioniSlamAttribute()
    {
        return $this->Studen()->where('religion_id', 1)->where('note', 0)->count();
    }
    public function getReligionMAttribute()
    {
        return $this->Studen()->where('religion_id', 2)->where('note', 0)->count();
    }
    public function getFristSittingsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('system_id', 1)->orderBy('sitting_number', 'asc')->select('sitting_number')->first();
    }
    public function getLastSittingsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('system_id', 1)->orderBy('sitting_number', 'desc')->first('sitting_number');
    }

    // نهاية الاستعلام عن العدد الاجمالى فى كل مدرسة فى اللجنة التابعه لها

    public function getArAttribute()
    {
        return $this->Studen()->where('note', 0)->where('ar', '<=', 39)->count();
    }
    public function getArAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('ar', '=', 'غـ')->count();
    }
    public function getEnAttribute()
    {
        return $this->Studen()->where('note', 0)->where('en', '<=', 29)->count();
    }
    public function getEnAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('en', '=', 'غـ')->count();
    }
    public function getStuAttribute()
    {
        return $this->Studen()->where('note', 0)->where('stu', '<=', 19)->count();
    }
    public function getStuAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('stu', '=', 'غـ')->count();
    }
    public function getMathGAttribute()
    {
        return $this->Studen()->where('note', 0)->where('math_g', '<=', 7)->count();
    }

    public function getMathGAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('math_g', '=', 'غـ')->count();
    }
    public function getTotalMathAttribute()
    {
        return $this->Studen()->where('note', 0)->where('total_math', '<=', 29)->count();
    }
    public function getMathHAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('math_h', '=', 'غـ')->count();
    }
    public function getSciAttribute()
    {
        return $this->Studen()->where('note', 0)->where('sci', '<=', 19)->count();
    }
    public function getSciAbsAttribute()
    {
        return $this->Studen()->where('note', 0)->where('status', 1)->where('sci', '=', 'غـ')->count();
    }
    public function getNoteAttribute()
    {
        return $this->Studen()->where('note', '=', 0)->count();
    }



    public function getAbsSecondSuccessNAttribute()
    {
        return $this->Studen()->where('note',  0)->where('system_id', 1)->where('abs_2', 0)->count();
    }

    public function getAbsSecondSuccessMAttribute()
    {
        return $this->Studen()->where('note',  0)->where('system_id', 2)->where('abs_2', 0)->count();
    }

    public function getAbsSecondFaillNAttribute()
    {
        return $this->Studen()->where('note',  0)->where('system_id', 1)->where('abs_2', 1)->count();
    }

    public function getAbsSecondFaillMAttribute()
    {
        return $this->Studen()->where('note',  0)->where('system_id', 2)->where('abs_2', 1)->count();
    }
    // public function getAbsSecondFaillAttribute()
    // {
    //     return $this->Studen()->where('note',  0)->where('abs_2', 1)->count();
    // }

    // public function getAbsSecondSuccessSystemNAttribute()
    // {
    //     return $this->Studen()->where('note',  0)->where('abs_2', 0)->where('system_id', 1)->count();
    // }




    // entrie_id
    // system_id
    // damg
    // nationality_id
    // religion_id
}
