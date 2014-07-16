$(function() {
	function generateLoremIpsum( event ) {
		
		// Cancel default form submit
		if (event) {
			event.preventDefault();
		}
		
		var $form = $( "#lorem-ipsum-form" ),
		url = $form.attr( "action" ) + "/" + $form.find( "#length" ).val() ;

		// Submit form using GET
		var post = 	$.ajax({
						type: "GET",
						url: url,
						data: $form.serialize(),
						dataType: "json"
					});

		// Form submit callback
		post.done(function( data ) {
			$( "#lorem-ipsum-field .bs-callout" ).html( "<p>" + data.join( "<p>" ) );
		});
	}

	function generateUser( event ) {
		// Cancel default form submit
		if (event) {
			event.preventDefault();
		}

		var $form = $( "#user-form" ),
		url = $form.attr( "action" ) + "/" + $form.find( "#ulength" ).val() ;

		// Submit form using GET
		var post = 	$.ajax({
						type: "GET",
						url: url,
						data: $form.serialize(),
						dataType: "json"
					});

		// Form submit callback
		post.done(function( data ) {
			$callout = $( "#user-field .bs-callout" );
			$callout.html("");

			data.forEach( function(item, index) {
				var html = "<h4>User " + (index + 1) + "</h4>" +
				"<dl><dt>Name</dt>" + 
				"<dd>" + item.name + "</dd>" +
				"<dt>Address</dt>" +
				"<dd>" + item.address + "</dd>" +
				"<dt>Phone number</dt>" + 
				"<dd>" + item.phone + "</dd></dl>";
				$callout.append(html);
			});
		});
	}

	// Execute on page load
	generateLoremIpsum();
	generateUser();

	// Execute when submitting form
	$( "#lorem-ipsum-form" ).submit( generateLoremIpsum );
	$( "#user-form" ).submit( generateUser );
});