<?php

$dbhost = '127.0.0.1';
$dbuser = 'root';

$dbpass = '';

$dbname = 'leadsave';

$conn = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass);
?>