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
		$prenom = ucfirst(strtolower($request->prenom));
		$nom = ucfirst(strtolower($request->nom));
		$request->request->add(['nom' => $nom, 'prenom' => $prenom]);
		User::create($request->all());
		return redirect()->action('UserController@getUsers');
	}

	public function getFiche($id){
		$user = User::find($id);
		return view ('client', ['user' => $user]);
	}

	public function btndelete(Request $request, $id){
		$user = User::find($request->id);
		$user->delete();
	}

	public function getClientModif($id){
		$user = User::find($id);
		return view ('clientModif', ['user' => $user]);
	}

}


