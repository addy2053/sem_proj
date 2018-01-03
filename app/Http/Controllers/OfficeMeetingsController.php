<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class OfficeMeetingsController extends Controller
{
    public function index()
    {
        $office=Hall::where('category_id',3)->paginate(10);
        return view('OfficeMeetings',compact('office'));
    }

    public function search(Request $request)
    {
        $office=Hall::where('hall_city',$request->search )-> orwhere('hall_name',$request->search)->paginate(10);
        return view('OfficeMeetings',compact('office'));
    }
}