<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\AddValet;
class AddValetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addvalet(Request $req)
    {
        $id = AddValet::savevalet($req->all());
             
            $imageName = $id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'),$imageName);

            return redirect()->back();
    }
     public function getData()
        {
             $valet = AddValet::fetch(); 
            return view('admin.add_valet')->with('valet_data',$valet);   
        }
     public function editdata($id)
        {
            $valet_data = AddValet::editdata($id);
            return view('admin.editValet')->with('edit_valet',$valet_data);
        }
    public function deletedata($id)
        {
            $valet_data = AddValet::detetedata($id);
            return redirect()->action('AddValetController@getData');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
            $valet_data1 = $req->all();
            AddValet::updatedata($valet_data1);
            return redirect()->action('AddValetController@getData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
