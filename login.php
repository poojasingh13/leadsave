<?php
include_once('global_var.php');
$_error='';
if($_SERVER["REQUEST_METHOD"] == "POST")
 { 
    if((!strcasecmp($_REQUEST["txtUserName"],"KFCSales01") && !strcasecmp($_REQUEST["txtUserPass"],"Sales01")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales02") && !strcasecmp($_REQUEST["txtUserPass"],"Sales02")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales03") && !strcasecmp($_REQUEST["txtUserPass"],"Sales03")) || (!strcasecmp($_REQUEST["txtUserName"],"KFCSales04") && !strcasecmp($_REQUEST["txtUserPass"],"Sales04"))) {
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
<body class="dt-example dt-example-bootstrap">
	<div class="container">
		<section>
			<span class="pull-right logoInside">
				<img src="media/images/logo-inner.png" class="pull-right" >
			</span>
			<h1 class=" pull-left heading">Leads</h1>
			<div class="clearfix"></div>
				<div class="login">
					<div class="box">                
						<form method="post" class="cls_insert" action="">
							<table id="example" class="table" cellspacing="0" width="100%">
								<tbody>									
									<tr class="form-group">
										<td><span class="spnname">User Name:</span></td>
										<td>
											<input type="text" maxlength="40" size="20"  name="txtUserName" class="form-control" />
											<span style="color:Red;font-weight: bold;" id="message"></span>
										</td>
									</tr>
									<tr class="form-group">
										<td><span class="spnname">Password:</span></td>
										<td><input type="password" maxlength="40" size="22" class="form-control" name="txtUserPass" /></td>
									</tr>
									<tr>
										<td style="vertical-align: bottom;">&nbsp; </td>
										<td align="left" style="padding-top: 8px;">
										<?php echo $_error; ?>
										<input type="submit"  value="Login" class="btn btn-primary cls_submit" id="cmdLogin" name="cmdLogin" />
										
										</td>
									</tr>
								</tbody>
							</table>
					</form>
				</div>
			</div>
		</section>
	</div>	
</body>
</html>