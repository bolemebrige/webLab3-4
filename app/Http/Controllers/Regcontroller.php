<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \Illuminate\Support\Facades\Hash;
class Regcontroller extends Controller
{
    

public function RegisterUser(){


$Users = \App\User::all();


foreach($Users as $User){



	if($User->email==(request->input('email')){


		return view('welcome',compact('User'));
	}else

{


$NewUser = new User;

$hashed = Hash::make(request('password'), [
    'rounds' => 12
]);
$NewUser->email=request->input('email');
$NewUser->password=$hashed;

$NewUser->save();

}

}




}



}
