<?php

namespace App\Http\Controllers;

use App\Http\Requests\edit_user_profile;
use App\Http\Requests\On_ADD_hall;
use App\User;
use Auth;
use Illuminate\Http\Request;

class edit_profileController extends Controller
{
    public function show()                    //$name just for show name in url
    {
        $user=User::where ('id',auth()->id())->get();
        return view('user_edit_profile',compact('user'));
    }

    public function update(edit_user_profile $request,$id)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->save();

       $request->session()->flash('alter', 'Task was successful!');
       return redirect(url('user/edit-profile'));


    }
}
