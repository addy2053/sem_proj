<?php

namespace App\Http\Controllers\admin;

use App\Booked;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MangeBookingController extends Controller
{
    public function index()
    {
//        $booked=Booked::all();
    $booked=Booked::paginate(10);
        return view('admin\booked_listing',compact('booked'));
    }

    public function destory($id)
    {
        $b=Booked::find($id);
          $b->delete();
        return redirect(url('/admin/listing/hall_listing'));
    }
}
