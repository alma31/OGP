<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Listes Clients</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1 style="text-align: center;">Liste des clients</h1>
	<form action="/add" method="GET">
		{{csrf_field()}}
		<input class="ui button" value="Ajouter un client" type="submit">
	</form>
	<table class='ui inverted olive table'>
		<th>Nom</th>
		<th>Prenom</th>
		<th>age</th>
		<th>CP</th>
		<th>Ville</th>
		<th>Email</th>
		<th>Telephone</th>
		<th>Heure Restant</th>
		<th>Heure Totale</th>
		@foreach ($user as $users)
		<tr>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->nom}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->prenom}}</a>

			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->age}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->cp}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->ville}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->email}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->tel}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->nhr}}</a>
			</td>
			<td>
				<a href="/client/fiche{{$users->id}}" style="color:white;display:block;width:100%;height:100%;">{{$users->nht}}</a>
			</td>
			@endforeach
		</tr>
	</table>
</body>
</html>