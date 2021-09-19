<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::where('status', 1)->get();
        return response()->json(['subject' => $subject], 200);
    }
}
