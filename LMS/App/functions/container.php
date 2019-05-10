<?php

use App\Handlers\Database;

/**
 * Created by PhpStorm.
 * User: manchidede
 * Date: 5/10/19
 * Time: 3:31 PM
 */

function db(){
	return Database::getInstance();
}