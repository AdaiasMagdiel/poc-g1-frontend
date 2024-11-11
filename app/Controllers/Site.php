<?php

namespace App\Controllers;

use AdaiasMagdiel\G1\Client;
use App\Template;

class Site extends Controller
{
	public static function index()
	{
		$data = self::$g1->ultimas();

		echo self::$template->render("index", [
			"data" => $data
		]);
	}
}
