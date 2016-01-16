<?php

$sql_details = array(
	'user' => 'root',
	'pass' => 'admin123',
	'db'   => 'kfc_lead',
	'host' => '127.0.0.1'
);

$conn = new PDO("mysql:host=".$sql_details['host'].";dbname=".$sql_details['db'], $sql_details['user'], $sql_details['pass']);


?>