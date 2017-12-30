<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class BirthdayEventBookingController extends Controller
{
    //
    public function index()
    {
        $birth=Hall::where('category_id',1)->paginate(5);
        return view('BirthdayEventBooking',compact('birth'));
    }
}
