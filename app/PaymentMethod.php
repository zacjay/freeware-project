<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class PaymentMethod extends Model
{
	public static function savemethod($user_data)
		{

			$insert = array(
				
                
				'method'=>$user_data['method'],
	
                'image'=>$user_data['image']
                            );

            // echo "<pre>";print_r($dept_data);die();
             return DB::table('payment_methods')->insertGetId($insert);
		}

		public static function fetch()
    	{

    		return PaymentMethod::where('status','1')->get();

    	}
    
}
