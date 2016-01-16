<?php 
include_once('global_var.php'); 
  
	if(isset($_SESSION["login"])){
		$_SESSION["login"] = false;
		header("Location:".$GLOBALS['url']."login.php");
		exit();
    }
?>