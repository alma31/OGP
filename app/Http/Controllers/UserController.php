<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
	public function getUsers(){
		$user = User::all();
		return view ('index', ['user' => $user]);
	}

	public function getAdd(){
		return view ('add');
	}
}
