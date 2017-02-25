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

	public function postAdd(Request $request){
		$nom = $request->nom;
		$prenom = $request->prenom;
		$numrue = $request->numrue;
		$rue = $request->rue;
		$cp = $request->cp;
		$ville = $request->ville;
		$email = $request->email;
		$tel = $request->tel;

		if (empty($nom)) {
			echo "<script>alert(\"Il manque un NOM\")</script>";
	 
		}

		if (empty($prenom)) {
			echo "<script>alert(\"Il manque un PRENOM\")</script>";
	 
		}

		if (empty($numrue)) {
			echo "<script>alert(\"Il manque un NUMERO DE RUE\")</script>";
	 
		}

		if (empty($rue)) {
			echo "<script>alert(\"Il manque une RUE\")</script>";
		
		}

		if (empty($cp)) {
			echo "<script>alert(\"Il manque un CODE POSTALE\")</script>";
		
		}

		if (empty($ville)) {
			echo "<script>alert(\"Il manque une VILLE\")</script>";
		
		}

		if (empty($email)) {
			echo "<script>alert(\"Il manque un EMAIL\")</script>";
		
		}

		if (empty($tel)) {
			echo "<script>alert(\"Il manque un numero de TELEPHONE\")</script>";
	 
		}

		else {
			User::create($request->all());
			return redirect()->action('UserController@getUsers');}
		}
	}
