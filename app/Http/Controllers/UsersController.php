<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UsersController extends Controller
{
    


public function index(){


$Users = \App\User::all();


//	return view('welcome');


return view('welcome',compact('Users'));







    //
}}
