<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
     public function addusers(Request $req)
    {
        $id = Register::adduser($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    }
}
