<?php

namespace App\Http\Controllers\owner;

use App\Booked;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagebookingListController extends Controller
{
    public function destroy($id)
    {
        $booked=Booked::findorfail($id);
        $booked->delete();
        return  redirect(url('/owner/booking'));
    }
}
