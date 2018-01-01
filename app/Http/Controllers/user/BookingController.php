<?php

namespace App\Http\Controllers\user;

use App\Booked;
use App\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
         //
        $booked=Booked::where('user_id',auth()->id())->paginate(6);
        return view('user\booking',compact('booked'));
    }

    public function store(Request $request,$id)
    {
       $book=new Booked();
       $book->hall_id=$id;
       $book->user_id=auth()->id();
       $book->on_date=$request->on_date;
       $book->save();

        return redirect(url('user\booking'));
    }

}
