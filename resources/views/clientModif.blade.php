<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Fiche client Modification</title>
	<link rel="stylesheet" href="/css/semantic.css">
	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<div class="ui grid">
		<div class="sixteen wide column">
			<h1 class="ui center aligned header">Fiche client de {{$user->prenom}}  {{$user->nom}}</h1>
			<form action="/" method="GET">
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
				<form action="/client/fiche/{{$user->id}}" method="GET">
					<button class="fluid ui button">Revenir sur la fiche client</button>
				</form>
			</div>
		</div>
		<div class="sixteen wide column">
			<!-- formulaire debut -->
			<form id="form" class="ui center olive form" action="/" method="POST">
				{{csrf_field()}}
				<div class="two wide fields ">
					<div class="ten wide field">
						<h2>Licence ffsnw</h2>
						<select name="ffsnw" class="ui dropdown">
							<option value="Non">Non</option>
							<option value="Oui">Oui</option>
						</select>
					</div>
				</div>
				<div class="two fields">
					<div class="five wide field">
						<h2>Email</h2>
						<input id="email" type="text" name="email" placeholder="Email" required="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Email non valide" value="{{$user->email}}">
					</div>
					<h2 id='result'></h2>
					<div class="five wide field">
						<h2>Telephone</h2>
						<input type="text" name="tel" placeholder="Telephone" required="" maxlength=10 pattern="^0[1-7]\d{8}$" required title="Tapez dans ce champ 0 (suivi d'un chiffre entre 0 et 7)" value="{{$user->tel}}">
					</div>
				</div>
				<div class="one field">
					<div class="ten wide field">
						<h2>Ajouter nouvelle adresse postale</h2>
						<input id="user_input_autocomplete_address" type="text" name="Adresse" placeholder="Adresse complete" required="">
					</div>
					<div class="two wide fields">
						<div class="two wide field">
							<h2>N°</h2>
							<input class="numrue" id="street_number" type="number" name="numrue" placeholder="Numero" required="" value="{{$user->numrue}}">
						</div>
						<div class="five wide field">
							<h2>Rue</h2>
							<input class="rue" id="route" type="text" name="rue" placeholder="rue" required="" value="{{$user->rue}}">
						</div>
						<div class="three wide field">
							<h2>CP</h2>
							<input class="cp" id="postal_code" type="text" name="cp" placeholder="CP" required="" required="" value="{{$user->cp}}">
						</div>
					</div>
				</div>
				<!-- input de type cacher pour google -->
				<input id="locality" type="hidden" name="ville" placeholder="Ville" value="{{$user->ville}}">
				<input id="country" type="hidden" name="pays" placeholder="Pays" value="{{$user->pays}}">
				<!-- input caher pour heure restante/total -->
				<input id="btn" type="submit" class="ui centered button" value="Ajouter">
				<input type="hidden" name="nht" value="0">
				<input type="hidden" name="nhr" value="0">
			</form>

			<!-- formulaire fin -->
		</div>
	</div>
</body>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="/js/sweetalert.min.js"></script>
</html>
</html>