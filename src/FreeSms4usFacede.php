<?php 

namespace R3k4\Freesms4us;

use Illuminate\Support\Facades\Facade;

class FreeSms4UsFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'freesms4us';
	}

}