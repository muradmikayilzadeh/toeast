<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Alumni;

class AlumniController extends Controller
{
    
	public function getAlumnies(){

		$alumnies = Alumni::orderBy('created_at','desc')->get();
		return view('alumni', compact('alumnies'));

	}


	public function addAlumni(Request $request){

		$new = new Alumni;
		$new->name = $request->name;
		$new->surname = $request->surname;
		
		if($request->hasFile('picture')){
           $ext=$request->file('picture')->getClientOriginalExtension();
            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

             	$file=$request->file('picture');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/alumni/',$filename);
                $path='assets/images/alumni/'.$filename;
                
                $new->img = $path;
                $new->save();
            }           
        }

        return back();

	}


	public function deleteAlumni(Request $request){

		$alumni = Alumni::find($request->id);
		$alumni->delete();
		return back();

	}

}
