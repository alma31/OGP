<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clients</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1 style="text-align: center;">Clients</h1>
	<h3 style="text-align: center;">Ajouter un client</h3>
	<form action="/products" method="POST">
		{{csrf_field()}}
		<label for="name">Nom</label>
		<input name="name" id="name" type="text">
		<label for="description">Description</label>
		<input name="description" id="description" type="text">
		<label for="price">Prix</label>
		<input name="price" id="price" type="number">
		<label for="stock">Quantiter</label>
		<input name="stock" id="stock" type="number">
		<input class="ui button" value="Ajouter client" type="submit">
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
			@endforeach
		</tr>
	</table>

</body>
</html>