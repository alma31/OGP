<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientController extends Controller
{
	public function getUsers(){
		$user = Client::all();
		return view ('index', ['user' => $user]);
	}

	public function getAdd(){
		$user = Client::all();
		return view ('add', ['user' => $user]);
	}

	public function postAdd(Request $request){
		$prenom = ucfirst(strtolower($request->prenom));
		$nom = ucfirst(strtolower($request->nom));
		$request->request->add(['nom' => $nom, 'prenom' => $prenom]);
		Client::create($request->all());
		return redirect()->action('ClientController@getUsers');
	}

	public function getFiche($id){
		$user = Client::find($id);
		return view ('client', ['user' => $user]);
	}

	public function btndelete(Request $request, $id){
		$user = Client::find($request->id);
		$user->delete();
	}

	public function getClientModif($id){
		$user = Client::find($id);
		return view ('clientModif', ['user' => $user]);
	}

	public function postClientModif(Request $request, $id){
		$user = Client::find($request->id);
		$user->ffsnw = $request->ffsnw;
		$user->email = $request->email;
		$user->tel = $request->tel;
		$user->numrue = $request->numrue;
		$user->rue = $request->rue;
		$user->cp = $request->cp;
		$user->ville = $request->ville;
		$user->save();
		return redirect()->action('ClientController@getFiche', $id);
	}

	public function getClientAddHeure($id){
		$user = Client::find($id);
		return view('clientAddHeure', ['user' => $user]);
	}

	public function postClientModifHeure(Request $request, $id){

		$user = Client::find($request->id);
		$nht = $request->nht;
		$user->increment('nht', $nht);
		$user->increment('nhr', $nht);
		$user->save();
		return redirect()->action('ClientController@getFiche', $id);
	}

	public function heuremoins($id){
		$user = Client::find($id);
		$user->nhr--;
		$user->save();
	}

}
