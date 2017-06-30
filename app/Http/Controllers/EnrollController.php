<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Payments;

class EnrollController extends Controller
{
    
    public function newRegister(Request $request){

    	$this->validate($request,[
           'name'=>'required',
           'surname'=>'required',
           'email'=>'required|unique:payments',
           'phone'=>'required',
           'date'=>'required',
        ]);

    	$new = new Payments;
    	$new->name = $request->name;
    	$new->surname = $request->surname;
    	$new->email = $request->email;
    	$new->phone = $request->phone;
    	$new->birth = $request->date;
    	$new->save();

    	return back()->with('success','Your request has been sent');

    }

}
