<?php
include_once("db_connection.php");

class newuser{
var $id,$email,$name,$mobile,$city,$status,$company;

	/* for checking if student exists or not */
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
		$sql = "INSERT INTO userinfo(name,email,mobile,city,company)
				VALUES('".$this->name."','".$this->email."','".$this->mobile."','".$this->city."','".$this->company."')";
		//echo $sql;
		$res = $conn->prepare($sql);
		return $res->execute();
		//$_SESSION["email"]=$this->email;
		/*header("Location: ".$GLOBALS['url']."userDetail.php?PHPSESSID=".session_id()); /* Redirect browser */
		//exit();
	}
	
	function updateUserStatus(){
		global $conn;
		if($this->meet_held) {
			$sql = "Update userinfo set call1 =".intval($this->call1).", call2 =".intval($this->call2).", meet_held =".intval($this->meet_held).", send_email =".intval($this->send_email).", meet_held_date ='".$this->meet_held_date."', deal_closed =".intval($this->deal_closed)." where id='".$this->id."'" ;
		} else {
			$sql = "Update userinfo set call1 =".intval($this->call1).", call2 =".intval($this->call2).", meet_held =".intval($this->meet_held).", meet_held_date =null, send_email =".intval($this->send_email).", deal_closed =".intval($this->deal_closed)." where id='".$this->id."'" ;
		}	
		
		$res = $conn->prepare($sql);
		return $res->execute();
	}
	
	function deleteUser(){
		global $conn;
		$sql = "Update userinfo set active = 0 where id='".$this->id."'" ;
		//$sql = "DELETE FROM userinfo where id='".$this->id."'" ;
		$res = $conn->prepare($sql);
		return $res->execute();		
	}
	}
	?>