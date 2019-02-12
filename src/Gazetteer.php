<?php

namespace JosephMmendez\Gazetteer;

class Gazetteer {

	public function hello($world = null)
	{
		return "hello " . $world;
	}

	public function countries($input = null)
	{

		if (!$input)
		{
			$countries = \JosephMmendez\Gazetteer\Models\Country::where('active', '=', '1')->get();

			return $countries;
		}
		else
		{
			if (strlen($input) == 2) {
				$country = \JosephMmendez\Gazetteer\Models\Country::where('code', '=', $input)
															->where('active', '=', 1)
															->first();
				if (!$country) {
					return "No Item Found";
				}
				else {
					return $country;
				}
			}
			elseif (strlen($input) > 2) {
				$country = \JosephMmendez\Gazetteer\Models\Country::where('name', '=', $input)
															->where('active', '=', 1)
															->first();
				if (!$country) {
					return "No Item Found";
				}
				else {
					return $country;
				}

			}
			else {
				return "Bad Request";
			}
		}
	}

	public function states($input = null)
	{

		if (!$input) {
			return "Bad Request";
		}
		else {
			if(strlen($input) == 2) {
				$country = \JosephMmendez\Gazetteer\Models\Country::where('code', '=', $input)
															->where('active', '=', '1')
															->first();

				if (!count($country)) {
					return "No Item Found";
				}
				else {
					if (!count($country->states)) {
						return "No Item Found";
					}
					else {
						return $country->states;
					}
				}
			}
			elseif (strlen($input) > 2) {
				$country = \JosephMmendez\Gazetteer\Models\Country::where('name', '=', $input)
															->where('active', '=', 1)
															->first();
				if (!count($country)) {
					return "No Item Found";
				}
				else {
					if (!count($country->states)) {
						return "No Item Found";
					}
					else {
						return $country->states;
					}
				}
			}
			else {
				return "Bad Request";
			}
		}
	}

	public function cities($c, $s)
	{
		if (!$c) {
			return "Bad Request";
		}
		else {
			$country = \JosephMmendez\Gazetteer\Models\Country::where('code', '=', $c)
														->where('active', '=', '1')
														->first();
			if (!count($country)) {
				return "No Item Found";;
			}
			else {
				$states = $country->states;
				$state_code = "";

				foreach ($states as $state) {
					if ($state->code == $s) {
						$state_code = $state->code;
					}
				}

				if (!$state_code) {
					return "No Item Found";
				}
				else {
					$suburbs = \JosephMmendez\Gazetteer\Models\Suburb::where('state', '=', $state_code)
																->orderBy('postcode', 'asc')
																->get();
					return $suburbs;
				}
			}
		}
	}

 public function postcode($code)
 {

 	if (!$code) {
 		return "Bad Request";
 	}
 	else {
 		$suburbs = \JosephMmendez\Gazetteer\Models\Suburb::where('postcode', '=', $code)->get();

 		if (!count($suburbs)) {
 			return "No Item Found";
 		}
 		else {
 			return $suburbs;
 		}
 	}

 }
}
