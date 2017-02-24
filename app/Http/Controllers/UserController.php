<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
	public function getUsers(){
		$user = User::all();
		return view ('view', ['user' => $user]);
	}
}
