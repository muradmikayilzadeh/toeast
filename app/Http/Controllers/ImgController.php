<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ImgRequest;
use App\Imgs;

class ImgController extends Controller
{
    
    public function getGallery(){

    	$imgs = Imgs::orderBy('created_at','desc')->get();
    	return view('gallery', compact('imgs'));

    }

    public function addPictures(Request $request){

	    foreach ($request->pictures as $picture) {
    		
	    	$ext=$picture->getClientOriginalExtension();
            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {
                $filename=time()+random_int(1, 10000000).'.'.$picture->getClientOriginalExtension();
                $picture->move('assets/images/gallery/',$filename);
                $path='assets/images/gallery/'.$filename;
                
                $new = new Imgs;
                $new->title = $filename;
                $new->src = $path;
                $new->author = $request->author;
                $new->save();

            }  

    	}

    	return back();

    }

}
