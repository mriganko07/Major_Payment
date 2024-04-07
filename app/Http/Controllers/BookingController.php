<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function indexone(){
        return view('booking');
    }

    public function postone(Request $requestone){
        echo "<pre>";
        print_r($requestone->all());

        
        $formone = new Booking;
        $formone->name = $requestone['name'];
        $formone->contact = $requestone['contact'];
        $formone->email = $requestone['email'];
        $formone->address = $requestone['address'];
        $formone->password = md5($requestone['password']);
        $formone->save();
        return redirect('/index');
    }

    public function viewone(){
        $formdatas = Booking::all();
        $dataone =  compact('formdatas');
        return view('payment')->with($dataone);
    }
}
