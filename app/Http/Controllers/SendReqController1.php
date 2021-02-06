<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendRequest;

class SendReqController1 extends Controller
{
 	   public function send(Request $req)
    	{
            $id = SendRequest::sendreq($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    	}


    	// public function getData()
    	// {
     //   		 $request = SendRequest::fetch(); 
     //    	return view('admin.r_req_by_supmarket')->with('req_data',$request);   
    	// }
}

