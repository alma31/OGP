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
		$user = User::all();
		return view ('add', ['user' => $user]);
	}

	public function postAdd(Request $request){
		$nom = $request->nom;
		$prenom = $request->prenom;
		$numrue = $request->numrue;
		$rue = $request->rue;
		$cp = $request->cp;
		$ville = $request->ville;
		$email = $request->email;
		$tel = $request->tel;
		User::create($request->all());
		return redirect()->action('UserController@getUsers');
	}



	public function getFiche($id){
		$user = User::find($id);
		return view ('client', ['user' => $user]);
	}
}


