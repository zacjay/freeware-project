<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class SendResponse extends Model
{
    public static function sendRes($user_data)
		{

			$insert = array(
				'bill'=>$user_data['bill'],
                'gen'=>$user_data['gen'], 
                'genby'=>$user_data['genby'], 
                'due'=>$user_data['due'],
                'image'=>$user_data['image']
                            );

            // echo "<pre>";print_r($dept_data);die();
             return DB::table('send_requests')->insertGetId($insert);
		}
}
