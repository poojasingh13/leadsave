<?php
include_once("db_connection.php");

class newuser{
var $id,$email,$name,$mobile,$city,$status;

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
		$sql = "INSERT INTO userinfo(name,email,mobile,city)
				VALUES('".$this->name."','".$this->email."','".$this->mobile."','".$this->city."')";
		$res = $conn->prepare($sql);
		$res->execute();
		$_SESSION["email"]=$this->email;
		/*header("Location: ".$GLOBALS['url']."userDetail.php?PHPSESSID=".session_id()); /* Redirect browser */
		//exit();
	}
	
	function updateUserStatus(){
		global $conn;
		$sql = "Update userinfo set status =".intval($this->status)." where id='".$this->id."'" ;
		$res = $conn->prepare($sql);
		$res->execute();
	}
	
	function deleteUser(){
		global $conn;
		$sql = "Update userinfo set active = 0 where id='".$this->id."'" ;
		//$sql = "DELETE FROM userinfo where id='".$this->id."'" ;
		$res = $conn->prepare($sql);
		$res->execute();		
	}
	}
	?>