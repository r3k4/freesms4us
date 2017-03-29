<?php 

namespace R3k4\FreeSms4Us;

use Illuminate\Support\Facades\Facade;

class FreeSms4UsFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'freesms4us';
	}

}