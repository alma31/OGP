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
				{{$users->nom}}
			</td>
			<td>
				{{$users->prenom}}

			</td>
			<td>
				{{$users->age}}
			</td>
			<td>
				{{$users->cp}}
			</td>
			<td>
				{{$users->ville}}
			</td>
			<td>
				{{$users->email}}
			</td>
			<td>
				{{$users->tel}}
			</td>
			<td>
				{{$users->nhr}}
			</td>
			<td>
				{{$users->nht}}
			</td>
			@endforeach
		</tr>
	</table>
</body>
</html>