<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blogs;
use App\Imgs;


class BlogController extends Controller
{
	
	public function getBlogs(){

		$blogs = Blogs::orderBy('created_at','desc')->get();
		return view('news',compact('blogs'));

	}

	public function getBlog($slug){

		$blog = Blogs::where('slug',$slug)->first();
		return view('blog',compact('blog'));

	}

	public function createBlog(Request $request){

		$this->validate($request,[
           'title'=>'required',
           'content'=>'required',
        ]);

		// -------Add Cover Photo--------
		if($request->hasFile('picture')){
           $ext=$request->file('picture')->getClientOriginalExtension();
            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

             	$file=$request->file('picture');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/blog/',$filename);
                $path='assets/images/blog/'.$filename;
                
                $new = new Imgs;
                $new->title = $request->title;
                $new->author = $request->author;
                $new->src = $path;
                $new->save();
                $img_id = Imgs::latest()->first()->id;
            }           
        }


		$new = new Blogs;
		$new->title = $request->title;
		$new->slug = strtolower(str_replace(" ", "-",$request->title));
		$new->content = $request->content;
		$new->img = $img_id;
		$new->author = $request->author;
		$new->status = '1';
		$new->save();

		return back()->with('success','Blog Added');

	}

	public function updateImg(Request $request){

		$image = Imgs::find($request->id);

		if($request->hasFile('picture')){
           $ext=$request->file('picture')->getClientOriginalExtension();
            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

             	$file=$request->file('picture');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/blog/',$filename);
                $path='assets/images/blog/'.$filename;
                
                $image->src = $path;
                $image->save();
            }           
        }

        return back();

	}


	public function updateContent(Request $request){

		$blog = Blogs::find($request->id);
		$blog->content = $request->content;
		$blog->save();
		return back()->with('success','News content changed');

	}

	public function updateTitle(Request $request){

		$blog = Blogs::find($request->id);
		$blog->title = $request->title;
		$blog->save();
		return back()->with('success','News title changed');


	}

}
