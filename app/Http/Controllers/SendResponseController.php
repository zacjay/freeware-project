<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendResponse;
class SendResponseController extends Controller
{
    public function send(Request $req)
    {
        $id = SendResponse::sendRes($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    }
}
