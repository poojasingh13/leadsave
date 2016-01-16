<?php
include_once("db_connection.php");

class newuser{
var $id,$email,$name,$mobile,$city;

	/* for checking if student exists or not */
	function checkifexist(){
		global $conn;
		$q = "SELECT * FROM student WHERE email='".$this->$email."'";
		
		//die($q);
		$res = $conn->prepare($q);
		$res->execute();
		//$res = mysqli_query($GLOBALS['conn'],$q);
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
	}
	?>