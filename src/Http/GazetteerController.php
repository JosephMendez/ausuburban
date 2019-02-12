<?php

namespace Subbe\Gazetteer\Http;

use Illuminate\Routing\Controller as BaseController;

class GazetteerController extends BaseController
{
	public function all($world = null)
	{
		(!$world) ? $world = "world" : $world = $world;
		echo \Gazetteer::hello($world) . "!<br>Successfully processed @ ". \Carbon\Carbon::now();;

		echo "<br/><br/>";
		echo "<h3>Gazetteer::countries() <small> ********** returns a collection of available countries</small></h3>";
		echo \Gazetteer::countries();		

		echo "<br/><br/>";
		echo "<h3>Gazetteer::countries(\$country_code) <small> ********** returns an instance of the requested country (searched by country code)</small></h3>";
		echo \Gazetteer::countries("AU");

		echo "<br/><br/>";
		echo "<h3>Gazetteer::countries(\$country_name) <small> ********** returns an instance of the requested country (searched by country name)</small></h3>";
		echo \Gazetteer::countries("Maldives");	

		echo "<br/><br/>";
		echo "<h3>Gazetteer::states(\$country_code) <small> ********** returns a collection of states for a given country (searched by country code)</small></h3>";
		echo \Gazetteer::states("AU");

		echo "<br/><br/>";
		echo "<h3>Gazetteer::states(\$country_name) <small> ********** returns a collection of states for a given country (searched by country name)</small></h3>";
		echo \Gazetteer::states("Maldives");

		echo "<br/><br/>";
		echo "<h3>Gazetteer::cities(\$country,\$states) <small> ********** returns a collection of states for a given country (searched by country name)</small></h3>";
		echo \Gazetteer::cities("AU", "QLD");

		echo "<br/><br/>";
		echo "<h3>Gazetteer::postcode(\$postcode) <small> ********** returns a collection of suburbs for a given postcode (searched by postcode)</small></h3>";
		echo \Gazetteer::postcode("4067");

		

	}
}