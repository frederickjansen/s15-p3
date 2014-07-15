$(function() {
	function generateLoremIpsum( event ) {
		
		// Cancel default form submit
		if (event) {
			event.preventDefault();
		}
		
		var $form = $( "#lorem-ipsum-form" ),
		url = $form.attr( "action" ) + "/" + $form.find( "#length" ).val() ;

		var post = 	$.ajax({
						type: "GET",
						url: url,
						data: $form.serialize(),
						dataType: "json"
					});

		post.done(function( data ) {
			$( "#lorem-ipsum-field .bs-callout" ).html( "<p>" + data.join( "<p>" ) );
		});
	}

	// Execute on page load
	generateLoremIpsum();

	// Execute when submitting form
	$( "#lorem-ipsum-form" ).submit( generateLoremIpsum );
});