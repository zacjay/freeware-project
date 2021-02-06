<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddUser;

class AddUserController extends Controller
{
    public function adduser(Request $req)
    	{
            $id = AddUser::saveuser($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    	}
     public function getData()
    	{
       		 $user = AddUser::fetch(); 
        	return view('admin.user_list')->with('user_data',$user);   
    	}
    public function editdata($id)
        {
            $user_data = AddUser::editdata($id);
            return view('admin.editusers')->with('edit_data',$user_data);
        }
     public function update(Request $req)
        {
              
            $user_data1 = $req->all();
            AddUser::updatedata($user_data1);
            return redirect()->action('AddUserController@getData');
        }
    public function deletedata($id)
        {
            $user_data = AddUser::detetedata($id);
            return redirect()->action('AddUserController@getData');
        }
        
}
