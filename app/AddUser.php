<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{

    public static function saveuser($user_data)
		{

			$insert = array(
				'role'=>$user_data['role'],
                'username'=>$user_data['username'], 
                'email'=>$user_data['email'], 
                'password'=>$user_data['password'],
                'image'=>$user_data['image']
                            );

            // echo "<pre>";print_r($dept_data);die();
             return DB::table('add_users')->insertGetId($insert);
		}
	public static function fetch()
    	{

    		return AddUser::where('status','1')->get();

    	}
        
    public static function editdata($id)
        {
             $data = DB::table('add_users')->where('id',$id)->first();
            return $data;
        }
    public static function updatedata($data)
        {
            $arr = array('role'=>$data['role'],'username'=>$data['username'], 'email'=>$data['email'], 'password'=>$data['password'], 'image'=>$data['image']);

            DB::table('add_users')->where('id',$data['n1'])->update($arr);
        }
     public static function detetedata($id)
        {
            DB::table('add_users')->where('id',$id)->update(['status'=>'0']);
        }
}

