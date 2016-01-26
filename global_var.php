<?php
if(!isset($_SESSION)){ //Doesn't let Browser create Cache
	if ( isset($_REQUEST['PHPSESSID'])){
		session_id($_REQUEST['PHPSESSID']);
	}
	session_start();
}
$url="http://localhost/kfcleadsave/";
//$url="http://digiqom.com/kfc/";
$bpc=2;

if(!isset($_SESSION["login"])){
	$_SESSION["login"]=false;
}
?>