<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Fiche client</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<h1 style="text-align: center;">Fiche client<div>{{$user->nom}}  {{$user->prenom}}</div></h1>
	<div class="ui one column centered grid">
		<div class="column">
			<div class="ui card">
				<div class="image">
					@if ($user->sexe == "Homme")
					<img src="http://semantic-ui.com/images/avatar2/small/matthew.png">
					@else 
					<img src="http://semantic-ui.com/images/avatar2/small/molly.png">
					@endif
				</div>
				<div class="content">
					<div class="header">{{$user->nom}} {{$user->prenom}}</div>
					<strong>Information personnel</strong>
					<div>Nom : {{$user->nom}}</div>
					<div>Prenom : {{$user->prenom}}</div>
					<div>Age : {{$user->age}} ans</div>
					<strong>Adresse</strong>
					<div>{{$user->numrue}} {{$user->rue}}</div>
					<div>{{$user->cp}} {{$user->ville}}</div>
				</div>
			</div>
		</div>
		<div class="four column centered row">
			<div class="column">
				

			</div>
			<div class="column">
				

			</div>
		</div>
	</div>
</body>
</html>