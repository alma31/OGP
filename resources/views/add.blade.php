<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Ajouter un client</title>
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
		<h1 class="ui center aligned header">Ajouter un client</h1>
		<form action="/index" method="GET">
			<input type="submit" class="ui button" value="Retourner listes clients">
		</form>
		<div class="headerhr"></div>
	</div>
</div>
<div class="sixteen wide column">
	<form id="form" class="ui center olive form add" action="/index" method="POST">
		{{csrf_field()}}
		<div class="two fields">
			<div class="five wide field">
				<h2>Nom</h2>
				<input type="text" name="nom" placeholder="Nom" required="">
			</div>
			<div class="five wide field">
				<h2>Prenom</h2>
				<input type="text" name="prenom" placeholder="Prenom" required="">
			</div>
		</div>
		<div class="three wide fields ">
			<div class="three wide field">
				<h2>Sexe</h2>
				<select name="sexe" class="ui dropdown">
					<option value="Homme">Homme</option>
					<option value="Femme">Femme</option>
				</select>
			</div>
			<div class="three wide field">
				<h2>Licence ffsnw</h2>
				<select name="ffsnw" class="ui dropdown">
					<option value="Non">Non</option>
					<option value="Oui">Oui</option>
				</select>
			</div>
			<div class="four wide field">
				<h2>Date de naissance</h2>
				<input name="age" type="date" required title="JOUR/MOIS/ANNEE">
			</div>
		</div>
		<div class="two fields">
			<div class="five wide field">
				<h2>Email</h2>
				<input id="email" type="text" name="email" placeholder="Email" required="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Email non valide">
			</div>
			<h2 id='result'></h2>
			<div class="five wide field">
				<h2>Telephone</h2>
				<input type="text" name="tel" placeholder="Telephone" required="" maxlength=10 pattern="^0[1-7]\d{8}$" required title="Tapez dans ce champ 0 (suivi d'un chiffre entre 0 et 7)">
			</div>
		</div>
		<div class="one field">
			<div class="ten wide field">
				<h2>Adresse complete</h2>
				<input id="user_input_autocomplete_address" type="text" name="Adresse" placeholder="Adresse complete" required="">
			</div>
			<div class="two wide fields">
				<div class="two wide field">
					<h2>N°</h2>
					<input id="street_number" type="number" name="numrue" placeholder="Numero" required="">
				</div>
				<div class="five wide field">
					<h2>Rue</h2>
					<input id="route" type="text" name="rue" placeholder="rue" required="">
				</div>
				<div class="three wide field">
					<h2>CP</h2>
					<input id="postal_code" type="text" name="cp" placeholder="CP" required="" required="">
				</div>
			</div>
		</div>
		<!-- input de type cacher pour google -->
		<input type="hidden" name="date" value="">
		<input id="locality" type="hidden" name="ville" placeholder="Ville">
		<input id="country" type="hidden" name="pays" placeholder="Pays">
		<!-- input caher pour heure restante/total -->
		<input id="btn" type="submit" class="ui centered button" value="Ajouter">
		<input type="hidden" name="nht" value="0">
		<input type="hidden" name="nhr" value="0">
	</form>
</div>
</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>