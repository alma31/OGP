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

	<form>
		<label>Address</label>
		<input id="user_input_autocomplete_address" placeholder="Votre adresse...">
		<label>street_number</label>
		<input id="street_number" name="street_number" disabled>
		<label>route</label>
		<input id="route" name="route" disabled>
		<label>locality</label>
		<input id="locality" name="locality" disabled>
		<label>country</label>
		<input id="country" name="country" disabled>
	</form>


</body>
<!-- Include Google Maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
