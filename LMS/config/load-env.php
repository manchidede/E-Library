<?php
/**
 * Created by PhpStorm.
 * User: manchidede
 * Date: 5/10/19
 * Time: 2:20 PM
 */
$file = projectPath.'.env';
$arr = explode(PHP_EOL, file_get_contents($file));
foreach($arr as $line) {
	if( empty($line) ) continue;
	list($var, $val) = explode("=", $line, 2);
	$var = trim($var);
	$val = trim($val);
	putenv("$var=$val");
}