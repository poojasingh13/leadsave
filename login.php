<?php
include_once('global_var.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
 { 
    if(!strcasecmp($_REQUEST["txtUserName"],"atableforyou") && !strcasecmp($_REQUEST["txtUserPass"],"atableforyou")) {
		$_SESSION["login"]=true;
		header("Location: ".$GLOBALS['url']."table.php"); /* Redirect browser */
		die();
	}
 }

 include_once('header.php'); ?>
	<title>Login</title>	
</head>
<body class="dt-example dt-example-bootstrap">
	<div class="container">
		<section>
			<h1>Login</h1>
				<div class="login">
					<div class="box">
                
						<form method="post" class="cls_insert" action="">
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

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
										<input type="submit"  value="Login" class="btn btn-primary cls_submit" id="cmdLogin" name="cmdLogin" /></td>
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