<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;
class AddValet extends Model
{
     public static function savevalet($user_data)
		{

			$insert = array(
				
                'username'=>$user_data['username'], 
                'email'=>$user_data['email'], 
                'password'=>$user_data['password'],
                'contact'=>$user_data['contact'],
                'vehicle'=>$user_data['vehicle'],
				'company'=>$user_data['company'],
	
                'image'=>$user_data['image']
                            );

            // echo "<pre>";print_r($dept_data);die();
             return DB::table('add_valets')->insertGetId($insert);
		}
		public static function fetch()
    	{

    		return AddValet::where('status','1')->get();

    	}
    	public static function editdata($id)
        {
             $data = DB::table('add_valets')->where('id',$id)->first();
            return $data;
        }
    public static function updatedata($data)
        {
            $arr = array('username'=>$data['username'], 'email'=>$data['email'], 'password'=>$data['password'], 'contact'=>$data['contact'], 'vehicle'=>$data['vehicle'], 'company'=>$data['company'], 'image'=>$data['image']);

            DB::table('add_valets')->where('id',$data['n1'])->update($arr);
        }
     public static function detetedata($id)
        {
            DB::table('add_valets')->where('id',$id)->update(['status'=>'0']);
        }
}
