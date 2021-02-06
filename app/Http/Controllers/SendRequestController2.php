<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendRequest1;
class SendRequestController2 extends Controller
{
    public function send(Request $req)
    {
        $id = SendRequest1::sendReq($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    }
}

