<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function countSchools()
    {
        $count_schools = Committee::with('School')->orderBy('id', 'asc')->get();
        return $count_schools;
    }
}
