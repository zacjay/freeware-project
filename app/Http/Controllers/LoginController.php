<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class LoginController extends Controller
{
    function loginPage()
    {
    	return view('admin.login');
    }

    function loginPage1(Request $req)
    {
    	$param=$req->all();
        $user = \App\User::where('email',$param['email'])->where('password',$param['password'])->first();

        if(empty($user))
        {
        	return back()->withError(['login'=>'Please enter Login and Password'])->withInput();
        }
        if(!empty($user))
        {
		    Auth::LoginUsingId($user->id);
		            
		     if(Auth::user()->role==1)
		     {   	
		        return redirect()->action('LoginController@loaddashboard');
		     }
		     if(Auth::user()->role == 2 )
              {

		      }
       	}
    }

    function loaddashboard()
    {
    	return view('admin.AdminDashboard');
    }


}
