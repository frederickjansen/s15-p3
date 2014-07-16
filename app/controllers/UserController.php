<?php

class UserController extends \BaseController {

	/**
	 * Display amount of users.
	 *
	 * @return Response
	 */
	public function generateUser($num)
	{
		// Only ajax requests allowed
		if (Request::ajax())
		{
			$faker = Faker\Factory::create();
			$fakers = [];

			for ($i=0; $i < $num; $i++)
			{
				$fakers[] = [	"name" 		=> $faker->name,
								"address" 	=> $faker->address,
								"phone"		=> $faker->phoneNumber
							];
			}

			// Return a json response
			return Response::json( $fakers );
		}
	}
}
