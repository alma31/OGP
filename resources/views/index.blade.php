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
	<h1 style="text-align: center;">Liste des clients</h1>
	<form action="/add" method="GET">
		{{csrf_field()}}
		<input class="ui button" value="Ajouter un client" type="submit">
	</form>
	<hr>
	<br>
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
</body>
</html>