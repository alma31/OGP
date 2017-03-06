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
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$('#btndelete').click(function(e){
		var id = $(this).data("id");
		var token = $(this).data("token");
		e.preventDefault();
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",
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
						swal("Deleted!", "Your imaginary file has been deleted.", "success");
						setTimeout(function () { window.location.replace("/"); }, 1000);

					}
				});
			} else {
				swal("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});

	});

});

google.maps.event.addDomListener(window, 'load', function() {
	initializeAutocomplete('user_input_autocomplete_address');
});





