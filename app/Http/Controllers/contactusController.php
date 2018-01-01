<?php

namespace App\Http\Controllers;

use App\contactus;
use Illuminate\Http\Request;

class contactusController extends Controller
{
    //
    public function index()
    {
        return view('contactus');
    }

    public function show()
    {
        $cont=contactus::paginate(10);
        return view('admin/feedback',compact('cont'));
    }



    public function store(Request $request)
    {
        $cont = new contactus();
        $cont->name= $request->name;
        $cont->email= $request->email;
        $cont->contact= $request->contact;
        $cont->feedback= $request->feedback;
        $cont->save();

        return redirect(url('contactus'));

    }
}
