<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;

class hallsController extends Controller
{
    public function index()
    {
        $hall=Hall::where('category_id',2)->paginate(10);

        return view('halls',compact('hall'));
    }
}
