<?php

namespace App\Http\Controllers;
use App\models\loginModel;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function userLogin(Request $request){
    	$email = $request['user_email'];
    	$password = $request['user_password'];
    	$qry = loginModel::where('user_email','=',$email)->where('user_password','=',$password)->first();
    	if($qry == true){
    		return response()->json("success");
    	}else{
    		return response()->json("failed");
    	}
    }
}
