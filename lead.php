<?php
include_once("global_var.php");
include_once("queries.php");
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") {
	if( isset( $_REQUEST["id"] ) ) {
		$user = new newuser();
		$k=false;
		switch($_REQUEST["id"]){
			case "save":
				try {					
					$user->name = $_REQUEST["name"];
					$user->email = $_REQUEST["email"];
					$user->mobile = $_REQUEST["mobile"];
					$user->city = $_REQUEST["city"];
					$user->company = $_REQUEST["company"];					
					$user->active = 1;						
					$k = $user->createNewUser();					
					$rtn['res']=$k;
				}catch (Exception $e) {		
					$rtn['error']=$e;
					$rtn['res']=false;
				}
				break;
			case "update":
				try {					
					$user->id = $_REQUEST["userid"];
					$user->call1 = $_REQUEST["call1"];
					$user->call2 = $_REQUEST["call2"];
					$user->meet_held = $_REQUEST["meet_held"];
					$user->send_email = $_REQUEST["send_email"];
					$user->deal_closed = $_REQUEST["deal_closed"];					
					$user->meet_held_date = $_REQUEST["meet_held_date"];
							
					$k = $user->updateUserStatus();
					//echo $k;
					$rtn['res']=$k;
				}catch (Exception $e) {		
					$rtn['error']=$e;
				}
				break;
			case "delete":
				try {					
					$user->id = $_REQUEST["userid"];					
					$k = $user->deleteUser();
					$rtn['res']= $k ;
				}catch (Exception $e) {		
					$rtn['error']=$e;
				}
				break;
		}
		
		header('Content-Type:application/json');
		//echo $k;
		echo json_encode($rtn);
	}
}