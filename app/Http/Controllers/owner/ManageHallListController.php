<?php

namespace App\Http\Controllers\owner;

use App\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageHallListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return auth()->id();
        $hall=Hall::where('user_id',auth()->id())->get();
        return view('/owner/index',compact('hall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner/add_hall');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hall=new Hall();
        $hall->hall_name=$request->hall_name;
        $hall->hall_location=$request->hall_location;
//        $hall->hall_city=$request->hall_city;
        $hall->hall_contact=$request->hall_contact;
        $hall->user_id=auth()->id();
        $hall->category_id=$request->category;
        $hall->save();
        return  redirect(url('/owner/listing'));
//        return  redirect(url('owner_listing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall=Hall::findorfail($id);
        return view('owner/edit_hall',compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b=Hall::find($id);
        $b->delete();

        return  redirect(url('/owner/listing'));
    }
}
