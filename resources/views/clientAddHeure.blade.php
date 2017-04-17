<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Fiche client</title>
	<link rel="stylesheet" href="/css/semantic.css">
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
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
		<h1 class="ui center aligned header">Fiche client de {{$user->prenom}}  {{$user->nom}}</h1>
		<form action="/index" method="GET">
			<input type="submit" class="ui button" value="Revenir a la liste">
		</form>
		<div class="headerhr"></div>
	</div>
	<div class="sixteen wide column">
		<div class="ui card">
			<div class="image">
				@if ($user->sexe == "Homme")
				<img src="/images/matthew.png">
				@else 
				<img src="/images/molly.png">
				@endif
			</div>
			<div class="content">
				<strong>Information personnel</strong>
				<div>Nom : {{$user->nom}}</div>
				<div>Prenom : {{$user->prenom}}</div>
				<div>Age : {{$user->age}} ans</div>
				<strong>Adresse</strong>
				<div>{{$user->numrue}} {{$user->rue}}</div>
				<div>{{$user->cp}} {{$user->ville}}</div>
			</div>
			<form action="/client/fiche/{{$user->id}}" method="GET">
				<button class="fluid ui button">Revenir sur la fiche client</button>
			</form>
		</div>
		<div class="blok heure">
			<div class="sixteen wide field">
				<h2>Vous avez un choisi un forfait : <span id="choix"></span> <span id="heure"></span></h2>
				<form action="/client/add/heure/{{$user->id}}" method="POST">
					{{ csrf_field() }}
					<select id="choix1" name="nht" class="ui dropdown">
						<option value="0">Choisir un forfait</option>
						<option value="1">Forfait 1 heure 17,00€</option>
						<option value="2">Forfait 2 heures 31,00€</option>
						<option value="10">Forfait 10 heures 150,00€</option>
						<option value="20">Forfait 20 heures 250,00€</option>
						<option value="30">Forfait 30 heures 330,00€</option>
					</select>
					<input id="disabled" disabled="disabled" type="submit" class="ui button" value="Acheter">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
<script src="/js/sweetalert.min.js"></script>
</html>

