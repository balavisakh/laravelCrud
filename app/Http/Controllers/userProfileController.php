<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\userProfileModel;

class userProfileController extends Controller
{
	//read data
    public function userProfile(){
    	$users = userProfileModel::all();
    	return response()->json($users);
    }

    //create data
    public function createUser(Request $request){
    	$createUser = new userProfileModel;
    	$data = $request->all();
    	$createUser->fill($data)->save();
    	return response()->json("inserted");
    }

    //update data
    public function updateUser(Request $request){
    	$id = $request['id'];
    	$name = $request['name'];
    	$age = $request['user_age'];
    	$email = $request['user_email'];
    	$details = $request['user_details'];

    	$userUpdate = userProfileModel::where('id',$id)->update(['name'=>$name,'user_age'=>$age,'user_email'=>$email,'user_details'=>$details]);
    	return response()->json("updated");
    }

    //delete user
    public function deleteUser(Request $request){
    	$id = $request['id'];
    	userProfileModel::where('id',$id)->delete();
    	return response()->json("deleted");
    }
}
