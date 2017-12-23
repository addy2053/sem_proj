<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;

class feedbackcontroller extends Controller
{

    public function store(Request $request)
    {
        $feed =new feedback();
        $feed->name=$request->name;
        $feed->email=$request->email;
        $feed->contact=$request->contact;
        $feed->feedback=$request->feedback;
        $feed->save();

       $request->session()->flash('alert-success','Thank you for feedback!');

        redirect(url('contactus'));
    }

}
