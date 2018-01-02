<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class BirthdayEventBookingController extends Controller
{
    //
    public function index()
    {
        $birth=Hall::where('category_id',1)->paginate(10);
        return view('BirthdayEventBooking',compact('birth'));
    }

    public function search(Request $request)
    {
        $birth=Hall::where('hall_city',$request->search )-> orwhere('hall_name',$request->search)->paginate(10);
        return view('BirthdayEventBooking',compact('birth'));
    }
}
