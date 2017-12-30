<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class OfficeMeetingsController extends Controller
{
    public function index()
    {
        $office=Hall::where('category_id',3)->paginate(5);
        return view('OfficeMeetings',compact('office'));
    }
}
