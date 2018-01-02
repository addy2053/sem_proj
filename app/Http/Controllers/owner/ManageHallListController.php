<?php

namespace App\Http\Controllers\owner;

use App\Hall;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\On_ADD_hall;
use Illuminate\Support\Facades\Storage;
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
         $d='scar';
//        $hall=Hall::where('hall_name','like','%'.substr($d,1,1).'%')->get();
        $hall=Hall::where('user_id',auth()->id())->paginate(10);
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
//    public function store(On_ADD_hall $request)
    public function store(On_ADD_hall $request)
    {
        $hall=new Hall();
        $hall->hall_name=$request->hall_name;
        $hall->hall_location=$request->hall_location;
        $hall->hall_city=$request->hall_city;
        $hall->hall_contact=$request->hall_contact;
        $hall->user_id=auth()->id();
        $hall->category_id=$request->category;
        $hall->save();

//        if($request->has('images')) {
//            for ($i = 0; $i < sizeof($request->images); $i++) {
//                $image = new Image();
//                $image->hall_id = $hall->id;
//                $image->name = $request->images[$i];
//
//
//                $image->save();
//
//            }
//
//        }

        if($request->file('images'))
        {
            $files = $request->file('images');
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('images',$name);

//save images into databe
                $image = new Image();
                $image->hall_id = $hall->id;
                $image->name =  $name;
                $image->save();
            }
        }
        return  redirect(url('/owner/listing'));
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
    public function update(On_ADD_hall $request, $id)
    {
        $hall=Hall::find($id);
        $hall->hall_name=$request->hall_name;
        $hall->hall_location=$request->hall_location;
        $hall->hall_city=$request->hall_city;
        $hall->hall_contact=$request->hall_contact;
        $hall->category_id=$request->category;
        $hall->save();


        if($request->file('images'))
        {
            $files = $request->file('images');
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('images',$name);

//save images into databe
                $image = new Image();
                $image->hall_id = $hall->id;
                $image->name =  $name;
                $image->save();
            }
        }

//        for ($i = 0; $i < sizeof($request->images); $i++) {
//            $image = new Image();
//            $image->hall_id = $hall->id;
//            $image->name = $request->images[$i];
//            $image->save();
//        }
//
//        if($request->file('images'))
//        {
//            $files = $request->file('images');
//            foreach($files as $file){
//                $name=$file->getClientOriginalName();
//                $file->move('images',$name);
//            }
//        }
        return  redirect(url('/owner/listing'));
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
