function initializeAutocomplete(id) {
	var input = document.getElementById('user_input_autocomplete_address');
	var options = {
		types: ['geocode'],
		postal_code: 'short_name',
		componentRestrictions: {country: 'fr'}
	};
	var element = document.getElementById(id);
	if (element) {
		var autocomplete = new google.maps.places.Autocomplete(input, options, element, { types: ['geocode'] });
		google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
	}
}

function onPlaceChanged() {
	var place = this.getPlace();

  // console.log(place);  // Uncomment this line to view the full object returned by Google API.

  for (var i in place.address_components) {
  	var component = place.address_components[i];
    for (var j in component.types) {  // Some types are ["country", "political"]
    	var type_element = document.getElementById(component.types[j]);
    if (type_element) {
    	type_element.value = component.long_name;
    }
}
}
}

$(document).ready(function(){
	$("#choix1").change(function() {
		var choix = $('#choix1').val();
		if (choix == 1) {	
			$('#choix').html("1");
			$('#disabled').removeAttr("disabled");
			$('#heure').html("heure");
		}
		if (choix == 2) {	
			$('#choix').html("2");
			$('#disabled').removeAttr("disabled");
			$('#heure').html("heures");
		}
		if (choix == 10) {	
			$('#choix').html("10");
			$('#disabled').removeAttr("disabled");
			$('#heure').html("heures");
		}
		if (choix == 20) {	
			$('#choix').html("20");
			$('#disabled').removeAttr("disabled");
			$('#heure').html("heures");
		}
		if (choix == 30) {	
			$('#choix').html("30");
			$('#disabled').removeAttr("disabled");
			$('#heure').html("heures");
		}

		if (choix == "0") {
			$('#heure').html("aucun");
			$("#disabled").attr('disabled',"disabled"); 
			$('#choix').html(" ");
		} 

	});

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


	$('#btnnhr').click(function(e){
		var id = $(this).data("id");
		var token = $(this).data("token");
		e.preventDefault();
		swal({
			title: "Acheter 1 heure de Wake Board",
			text: "1 HEURE",
			showCancelButton: true,
			closeOnConfirm: false,
			showLoaderOnConfirm: true,
		},
		function(){
			$.ajax({
				url : "btnnhr/"+id,
				type : "POST",
				data: {
					"id": id,
					"_method": 'POST',
					"_token": token,
				},
				success : function(){
					setTimeout(function(){
						window.location.replace("/client/fiche/"+id);
					}, 1300);	
				}
			});

		});
		
	});

	$('#btndelete').click(function(e){
		var id = $(this).data("id");
		var token = $(this).data("token");
		e.preventDefault();
		swal({
			title: "Êtes-vous sûr ?",
			text: "action irreversible",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Oui, je suis sûr !",
			cancelButtonText: "Non, je veux annuler !",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm) {
			if (isConfirm) {
				$.ajax({
					url : "btndelete/"+id,
					type : "POST",
					data: {
						"id": id,
						"_method": 'POST',
						"_token": token,
					},
					success : function(){
						swal("Suppression ok", "compte supprimer", "success");
						$('.confirm').click(function(){
							window.location.replace("/index")

						});

					}
				});
			} else {
				swal("Annuler", "Suppression annulé");
			}
		});

	});

});

google.maps.event.addDomListener(window, 'load', function() {
	initializeAutocomplete('user_input_autocomplete_address');
});