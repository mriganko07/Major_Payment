<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Booking;
use App\Models\Payment;


class FromController extends Controller
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


    public function index(){
        return view('forms');
    }

    public function post(Request $request) {
        echo "<pre>";
        print_r($request->all());

        $form = new Form;
        $form->date = $request['date'];
        $form->time = $request['time'];
        $form->guest = $request['guest'];
        $form->seat = $request['seat'];
        $form->table = $request['table'];
        $form->save();
        return redirect('/payment');
    }


    public function pay(Request $payment){
        echo "<pre>";
        print_r($payment->all());

        $pay = new Payment;
        $pay->paymethod = $payment['p_method'];
        $pay->save();
        return redirect('/indexone');
    }

    public function view(){
        $forms = Form::all();
        $formdatas = Booking::all();

        return view('/payment', compact('forms', 'formdatas'));
    }
}
