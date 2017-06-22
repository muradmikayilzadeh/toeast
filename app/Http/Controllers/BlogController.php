<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blogs;


class BlogController extends Controller
{
	
	public function getBlogs(){

		$blogs = Blogs::orderBy('created_at','desc')->get();
		// var_dump(-Blogs::find(4));
		return view('news',compact('blogs'));

	}

	public function createBlog(){



	}

	public function changeStatus(){


	}

	public function updateBlog(){



	}

}
