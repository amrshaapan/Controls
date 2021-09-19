<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function count1(Request $request)
    {
        // $wongames = Player::withCount(['games' => function ($query) {
        //     $query->where('winner', '=', 5);
        // }])->get();
        // dd($request->get('mange'));
        $count = School::get();
        return $count;
    }
}
