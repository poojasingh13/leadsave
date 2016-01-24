<?php
include_once("global_var.php");
include_once("queries.php");
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") {
	if( isset( $_REQUEST["id"] ) ) {
		$user = new newuser();
		switch($_REQUEST["id"]){
			case "save":
				try {					
					$user->name = $_REQUEST["name"];
					$user->email = $_REQUEST["email"];
					$user->mobile = $_REQUEST["mobile"];
					$user->city = $_REQUEST["city"];	
					$user->active = 1;						
					$user->createNewUser();
					$rtn['res']=true;
				}catch (Exception $e) {		
					$rtn['error']=$e;
					$rtn['res']=false;
				}
				break;
			case "update":
				try {					
					$user->id = $_REQUEST["userid"];
					$user->status = $_REQUEST["status"];
					$user->updateUserStatus();
					$rtn['res']=true;
				}catch (Exception $e) {		
					$rtn['error']=$e;
				}
				break;
			case "delete":
				try {					
					$user->id = $_REQUEST["userid"];					
					$user->deleteUser();
					$rtn['res']=true;
				}catch (Exception $e) {		
					$rtn['error']=$e;
				}
				break;
		}
		
		header('Content-Type:application/json');
		echo json_encode($rtn);
	}
}