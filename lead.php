<?php
include_once("global_var.php");
include_once("queries.php");
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") {
	if( isset( $_REQUEST["id"] ) ) {
		try {
			$user = new newuser();
			$user->name = $_REQUEST["name"];
			$user->email = $_REQUEST["email"];
			$user->mobile = $_REQUEST["mobile"];
			$user->city = $_REQUEST["city"];		
			$user->createNewUser();
			$rtn['res']=true;
		}catch (Exception $e) {		
			$rtn['error']=$e;
		}	
		header('Content-Type:application/json');
		echo json_encode($rtn);
	}
}