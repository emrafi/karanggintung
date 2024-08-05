<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function index() {
        return view('cctv');
    }

	public function store(Request $request)
	{  

	    $blog_id = $request->id;

	    $blog   =   Blog::updateOrCreate(
	    	        [
	    	         'id' => $blog_id
	    	        ],
	                [
	                'title' => $request->title, 
	                'detail' => $request->detail
	                ]);    
	                    
	    return Response()->json($blog);

	}
	 
	 
	public function edit(Request $request)
	{   
	    $where = array('id' => $request->id);
	    $blog  = Blog::where($where)->first();
	 
	    return Response()->json($blog);
	}
	 
    
	public function destroy(Request $request)
	{
	    $blog = Blog::where('id',$request->id)->delete();
	 
	    return Response()->json($blog);
	}
}
