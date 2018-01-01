<?php

namespace App\Http\Controllers;

use App\Booked;
use Illuminate\Http\Request;

class booked_dateController extends Controller
{
    public function index()
    {
        $booked_dates=Booked::paginate(10);
        return view('booked_dates',compact('booked_dates'));
    }
}
