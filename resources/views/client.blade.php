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
		<button id="btndelete" data-id="{{ $user->id }}" data-token="{{ csrf_token() }}" class="negative ui right floated button" value="supprimer">Supprimer ce compte</button>
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
			<form action="/client/fiche/modif/{{$user->id}}" method="GET">
				<button class="fluid ui button">Modifier les Informations Personnelles</button>
			</form>
		</div>
		<div class="blok">
			<div class="ui massive right floated segment">
				HEURE RESTANTE
				<div class="nhr">{{$user->nhr}}</div>
				<button id="btnnhr" data-id="{{ $user->id }}" class="positive ui button" data-token="{{ csrf_token() }}">Payer une heure de wakeboard</button>
			</div>
			<div class="ui left floated segment">
				HEURE TOTALE
				<div class="nht">{{$user->nht}}</div>
			</div>
			<div class="ui massive floated segment">
				LICENCE FFSNW
				<div class="ffsnw">{{$user->ffsnw}}</div>
			</div>
			<form action="/client/add/heure/{{$user->id}}">
				<button class="fluid ui button">Acheter des heures de wakeboard</button>
			</form>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
<script src="/js/sweetalert.min.js"></script>
</html>

