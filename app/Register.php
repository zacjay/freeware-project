<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Register extends Model
{
    public static function adduser($user_data)
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
}
