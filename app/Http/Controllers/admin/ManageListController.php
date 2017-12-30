<?php

namespace App\Http\Controllers\admin;

use App\Booked;
use App\Hall;
use App\hall_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//    $hall=Hall::all();
    $hall=Hall::paginate(10);
    return view('admin/hall_listing',compact('hall'));
    }


    public function destroy($id)
    {
        $b=Hall::find($id);
        $b->delete();
        return redirect(url('/admin/listing/hall_listing'));

    }
}
