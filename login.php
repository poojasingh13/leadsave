<?php
include_once('global_var.php');
$_error='';
if($_SERVER["REQUEST_METHOD"] == "POST")
 { 
    if((!strcasecmp($_REQUEST["txtUserName"],"KFCSales01") && !strcasecmp($_REQUEST["txtUserPass"],"Sales01")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales02") && !strcasecmp($_REQUEST["txtUserPass"],"Sales02")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales03") && !strcasecmp($_REQUEST["txtUserPass"],"Sales03")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales04") && !strcasecmp($_REQUEST["txtUserPass"],"Sales04")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales05") && !strcasecmp($_REQUEST["txtUserPass"],"Sales05"))) {
		$_SESSION["login"]=true;
		header("Location: ".$GLOBALS['url']."table.php"); /* Redirect browser */
		die();
	} else {
			$_error = '<span class="error">Email Id and Password do not match</span>';
		
	}
 }

 include_once('header.php'); ?>
	<title>Login</title>	
</head>
<body class="dt-example dt-example-bootstrap inner-bg">
	<div class="container no-bg">
		<section class="login-wrap">
		<span class="kfc-img"></span>
			<h1>User Login</h1>			
				<div class="form-wrap">
					<div>                
						<form method="post" class="cls_insert" action="">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="home-icon"></span></span>
								<input maxlength="40" size="20" name="txtUserName" class="form-control" type="text" placeholder="Name">
							</div>                    
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="key-icon"></span></span>
								<input maxlength="40" size="22" class="form-control" name="txtUserPass" type="password" placeholder="Password">
							</div>
							
							<div class="input-group">
								<?php echo $_error; ?>
								<input value="Login" class="btn btn-submit" id="cmdLogin" name="cmdLogin" type="submit">
							</div>
						</form>
					</div>
				</div>
		</section>
		<section class="login-img">
        	<div class="form-bottom rel">
        		<span class="happy-emp-img hidden-xs"><img src="media/images/form-bottom-img.png" class="img-responsive"></span>
            </div>
        </section><!-- form bottom image ends here -->
	</div>	
</body>
</html>