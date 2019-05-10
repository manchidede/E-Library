<?php
/**
 * Created by PhpStorm.
 * User: manchidede
 * Date: 5/10/19
 * Time: 2:22 PM
 */
define('projectPath', dirname(__FILE__).'/../');
require projectPath.'config/load-env.php';
include projectPath.'App/Handlers/Database.php';
include projectPath.'App/functions/container.php';
/**
 * Tester function
 */
function dd($val){
	var_dump($val);
	exit();
}