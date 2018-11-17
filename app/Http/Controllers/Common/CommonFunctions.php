<?php

namespace Alazhar\Http\Controllers\Common;

use Alazhar\Http\Controllers\Controller;

class CommonFunctions extends Controller
{
    public static function saveUserDetails($data){
    	$data['name'] = $data['full_name'];
    	$data['password'] = 'testing_password';
    	$saved_user = \Alazhar\User::create($data);
    	return $saved_user->id;
    }
}
