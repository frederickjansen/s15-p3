<?php

class LoremIpsumController extends \BaseController {

	/**
	 * Display amount of lorem ipsum paragraphs.
	 *
	 * @return Response
	 */
	public function generateLoremIpsum($num)
	{
		// Only ajax requests allowed
		if (Request::ajax())
		{
			// Generate lorem ipsum
			$generator = new Badcow\LoremIpsum\Generator();
			// No need to validate $num, already done by Laravel
			$paragraphs = $generator->getParagraphs( $num );

			// Return a json response
			return Response::json( $paragraphs );
		}
	}
}
