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
	<h1 class="header" style="text-align: center;">Fiche client de {{$user->prenom}}  {{$user->nom}}</h1>
	<form action="/" method="GET">
		<input type="submit" class="ui button" value="Revenir a la liste">
	</form>
	<hr>
	<button id="btndelete" data-id="{{ $user->id }}" data-token="{{ csrf_token() }}" class="negative ui button" value="supprimer"></button>
	
	<div class="ui one column centered grid">
		<div class="column">
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
				<button class="fluid ui button">Modifier les Informations Personnelles</button>
			</div>
		</div>
		<div class="four column centered row">
			<div class="column">
				<div class="ui massive right floated segment">
					HEURE RESTANTE
					<div class="nhr">{{$user->nhr}}</div>
					<br></br>
					<button class="positive ui button">Payer une heure de wakeboard</button>
				</div>
			</div>
			<div class="column">
				<div class="ui left floated segment">
					HEURE TOTALE
					<div class="nht">{{$user->nht}}</div>
				</div>
				<div class="ui massive floated segment">
					LICENCE FFSNW
					<div class="ffsnw">{{$user->ffsnw}}</div>
				</div>
				<button class="ui add button">Acheter des heures de wakeboard</button>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
	<script src="/js/sweetalert.min.js"></script>
</body>
</html>