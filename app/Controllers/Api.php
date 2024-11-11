<?php

namespace App\Controllers;

use AdaiasMagdiel\G1\Client;
use AdaiasMagdiel\G1\Enum\Estado;
use App\Template;

class Api extends Controller
{
	public static function latest()
	{
		$page = $_GET["page"] ?? 1;
		$state = $_GET["state"] ?? null;

		if (!is_null($state)) {
			$state = Estado::tryFrom($state);
		}

		$data = self::$g1->ultimas(page: $page, estado: $state);

		echo self::$template->render("components/news-group", [
			"data" => $data
		]);
	}
}
