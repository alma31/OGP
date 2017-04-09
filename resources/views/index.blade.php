<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Liste des Clients</title>
	<link rel="stylesheet" href="/css/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<div class="ui grid">
		<div class="sixteen wide column">
			<div class="ui mini menu">
				<span class="ui connect center">Vous êtes connecté : {{ Auth::user()->name }}</span>	
				<div class="right menu">
					<div class="item logout">	
						<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Déconnexion
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
			</div>
		</div>
		<h1 class="ui center aligned header">Listes clients</h1>
		<form action="/add" method="GET">
			<input type="submit" class="ui button" value="Ajouter Clients">
		</form>
		<div class="headerhr"></div>
	</div>
	<table class="ui striped table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Code postal</th>
				<th>Licence ffsnw</th>
			</tr>
		</thead>
		@foreach ($user as $users)
		<tr>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->nom}}</a>
			</td>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->prenom}}</a>
			</td>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->email}}</a>
			</td>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->tel}}</a>
			</td>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->cp}}</a>
			</td>
			<td>
				<a href="/client/fiche/{{$users->id}}" style="color:black;display:block;width:100%;height:100%;">{{$users->ffsnw}}</a>
			</td>
			@endforeach
		</tr>
	</table>
</div>
</body>
</html>