<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $get_data_group = Group::get();
        return response()->json($get_data_group, 200);
    }
}
