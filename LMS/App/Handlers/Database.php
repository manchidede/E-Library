<?php
/**
 * Created by PhpStorm.
 * User: manchidede
 * Date: 5/10/19
 * Time: 3:00 PM
 */

namespace App\Handlers;


class Database {
	private static $instance;

	public function con()
	{
		return mysqli_connect(getenv("DB_HOST"), getenv("DB_USERNAME"),
								getenv("DB_PASSWORD"), getenv("DB_NAME"));
	}

	public static function getInstance() {
		if (!Database::$instance instanceof self) {
			Database::$instance = new self();
		}
		return Database::$instance;
	}
}