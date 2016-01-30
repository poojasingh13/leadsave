<?php

include_once("db_connection.php");

class newuser{
var $id,$email,$name,$mobile,$city,$status,$company;

	/* for checking if student exists or not */
	
	function getUserIP()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}

		return $ip;
	}
	
	function checkifexist(){
		global $conn;
		$q = "SELECT * FROM student WHERE email='".$this->$email."'";
		$res = $conn->prepare($q);
		$res->execute();		
		$count = $res->rowCount();
		if($count > 0){
			return 1;
		}else{
			return 0;
		}
	}

	function createNewUser(){
		global $conn;
		$ipaddress = $this->getUserIP();
		$sql = "INSERT INTO userinfo(name,email,mobile,city,company,ipaddress)
				VALUES('".$this->name."','".$this->email."','".$this->mobile."','".$this->city."','".$this->company."','".$ipaddress."')";
		//echo $sql;
		$res = $conn->prepare($sql);
		return $res->execute();
		//$_SESSION["email"]=$this->email;
		/*header("Location: ".$GLOBALS['url']."userDetail.php?PHPSESSID=".session_id()); /* Redirect browser */
		//exit();
	}
	
	function updateUserStatus(){
		global $conn;
		$ipaddress = $this->getUserIP();
		if($this->meet_held) {
			$sql = "Update userinfo set call1 =".intval($this->call1).", call2 =".intval($this->call2).", meet_held =".intval($this->meet_held).", send_email =".intval($this->send_email).", meet_held_date ='".$this->meet_held_date."', deal_closed =".intval($this->deal_closed).", updated_on = current_timestamp, updated_ipaddress='".$ipaddress."', updated_by = '".print_r($_SESSION["userid"],true)."' where id='".$this->id."'" ;
		} else {
			$sql = "Update userinfo set call1 =".intval($this->call1).", call2 =".intval($this->call2).", meet_held =".intval($this->meet_held).", meet_held_date =null, send_email =".intval($this->send_email).", deal_closed =".intval($this->deal_closed).", updated_on = current_timestamp, updated_ipaddress='".$ipaddress."', updated_by = '".print_r($_SESSION["userid"],true)."' where id='".$this->id."'" ;
		}	
		
		$res = $conn->prepare($sql);
		return $res->execute();
	}
	
	function deleteUser(){
		global $conn;
		$ipaddress = $this->getUserIP();
		$sql = "Update userinfo set active = 0, deleted_on = current_timestamp, deleted_by = '".print_r($_SESSION["userid"],true)."', deleted_ipaddress='".$ipaddress."' where id='".$this->id."'" ;
		//$sql = "DELETE FROM userinfo where id='".$this->id."'" ;
		$res = $conn->prepare($sql);
		return $res->execute();		
	}
	
	
	
	}
	?>