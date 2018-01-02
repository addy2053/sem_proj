<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
//        $users=User::all();
        $users=User::paginate(10);
        return view('admin/show_all_users',compact('users'));
    }
}
