<?php

namespace JosephMmendez\Gazetteer\Facades;

use Illuminate\Support\Facades\Facade;

class GazetteerFacade extends Facade 
{
	protected static function getFacadeAccessor() {
		return 'gazetteer';
	}
}