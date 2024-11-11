<?php

namespace App\Controllers;

use AdaiasMagdiel\G1\Client;
use App\Template;

class Controller
{
	public static Template $template;
	public static Client $g1;

	public static function init()
	{
		self::$template = new Template(dirname(__FILE__, 3) . "/public");
		self::$g1 = new Client();
	}
}
