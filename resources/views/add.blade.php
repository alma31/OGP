<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Ajouter un client</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<h1 style="text-align: center;">Ajouter un client</h1>
	<form class="ui center olive form ">
		<div class="field">
			<label>Prenom/Nom</label>
			<div class="two fields">
				<div class="field">
					<input type="text" name="Nom" placeholder="Prenom">
				</div>
				<div class="field">
					<input type="text" name="Prenom" placeholder="Nom">
				</div>
			</div>
		</div>
		<div class="three center wide field ">
			<label>Sexe</label>
			<select class="ui dropdown">
				<option value="1">Homme</option>
				<option value="0">Femme</option>
			</select>
			<label>Licence ffsnw</label>
			<select class="ui dropdown">
				<option value="2">Oui</option>
				<option value="3">Non</option>
			</select>
		</div>
		<div class="two fields">
			<div class="field">
				<input type="text" name="email" placeholder="Email">
			</div>
			<div class="field">
				<input type="number" name="tel" placeholder="Telephone">
			</div>
		</div>
		<div class="field">
			<label>Adresse</label>
			<div class="fields">
				<div class="sixteen wide field">
					<input id="user_input_autocomplete_address" type="text" name="shipping[address]" placeholder="Adresse">
				</div>
			</div>
			<div class="four wide field">
				<input id="street_number" type="text" name="street_number" disabled placeholder="Numero">
			</div>
			<div class="four wide field">
				<input id="route" type="text" name="route" disabled placeholder="rue">
			</div>
			<div class="four wide field">
				<input id="postal_code" type="text" name="postal_code" disabled placeholder="CP">
			</div>
			<div class="four wide field">
				<input id="locality" type="text" name="locality" disabled placeholder="Ville">
			</div>
			<div class="four wide field">
				<input id="country" type="text" name="country" disabled placeholder="Pays">
			</div>
		</div>
		<div class="two fields">
		</div>
		<div class="fluid ui button" tabindex="0">Ajouter</div>
	</form>
</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
