<?php
include_once('global_var.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="media/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/jquery.multiple.css">
	<link rel="stylesheet" type="text/css" href="media/css/demo.css?bpc=<?php echo $bpc; ?>">	
	<link rel="stylesheet" type="text/css" href="media/fonts/font.css">	
    <title>KFC</title>  
  </head>
  <body class="dt-example dt-example-bootstrap">
	<div class="container">
		<header>
        	<div class="col-lg-9 col-md-9">
            	<p><img src="media/images/kfc_treat_1.png" class="img-responsive"></p>
                <p><img src="media/images/get-kfc_new.png" class="img-responsive"></p>
            </div>
            
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            	<h1 class="pull-right"><img src="media/images/logo.png?bpc=<?php echo $bpc; ?>" class="img-responsive"></h1>
            </div>
        	<div class="clearfix"></div>    
        </header>
		<section class="w100fl">
			<!--<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style="margin-top:46px"><img src="media/images/kfc_left-1.png" class="img-responsive"></div>-->
            <div class="col-lg-7 col-md-7 col-sm-6 rel">
            	<span class="aro hidden-xs"></span>
				<ul class="best-list">
                	<li class="imga img1">						
						Get Exclusive Deals for Employees
					</li>
                    <li class="imgb img2">Delight them with Gift Cards</li>
                    <li class="imgc img3">Or Call Us for Office Catering</li>
				</ul>
            </div>
			<div class="col-lg-5 col-md-5 col-sm-6">
            	<div class="register-form">
                	<p>Leave your details with us, and we will get in touch with you</p>
					<div class="form-wrap">
						<form role="form" id="LeadSave" class="userform" method="post">
						<ul>
							<li>
							  <div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="home-icon"></span></span>
								<input type="text" name="name" id="name" placeholder="Name"  class="form-control"  maxlength="50" />
							  </div>
						  </li>
						  <li>
							  <div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="email-icon"></span></span>
								<input type="email" class="form-control" placeholder="Email" name="email" id="email" maxlength="70" />
							  </div>
						  </li>
						  <li>
							  <div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="mobile-icon"></span></span>
								<input type="text" name="mobile" placeholder="Mobile No" class="form-control" id="mobile" maxlength="12">
							  </div>
						  </li>
						  <li>
							  <div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="company-icon"></span></span>
								<input type="text" name="company" placeholder="Company" class="form-control" id="company" maxlength="100">
							  </div>
						  </li>
						  <li>
						  <div class="form-group" style="min-height:46px;margin-bottom:2px;">
													
								<select class="form-control" name="city" id="id_CandidateLocation">
								   <option value="">- Select City -</option>
								   <option>Bengaluru</option>
								     <option>Hyderabad</option>
								</select>	 
								   
							</div>	
						  </li>
						  <li>
						  <div class="form-group marginBottom-0">
							<input type="hidden" name="id" value="save" />
							<button type="submit" class="btn btn-default btn-register pull-right">Register</button>
							<div class="clearfix"></div>  
						  </div>
						 </li>
						</ul> 
					</form>
				</div>	
			
                </div>
            </div>
        </section><!-- Form widget ends here -->
        <div class="clearfix"></div> 
        <section>
        	<div class="form-bottom rel">
        		<span class="happy-emp-img hidden-xs"><img src="media/images/form-bottom-img_1.png" class="img-responsive"></span>
            	
            </div>
        	
        </section><!-- form bottom image ends here -->
        
        <div class="clearfix"></div>
      	<section class="what-makes-kfc">
        	<h2 class="marginBottom-30">What makes KFC the irresistible choice?</h2>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	<img src="media/images/whatKFC-1.jpg" class="img-responsive">
                <p class="what-txt">Our world-renowned and lip-smacking taste is the taste that you can truly trust.</p>
          </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	<span><img src="media/images/whatKFC-2.jpg" class="img-responsive"></span>
                <p class="what-txt">We have 335 restaurants in more than 100 cities across the country. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	<span><img src="media/images/whatKFC-3.png" class="img-responsive"></span>
                <p class="what-txt">We bring the best deals for your employees. </p>
            </div>
        <div class="clearfix"></div>    
        </section><!-- What Makes KFC widgets Ends here -->
        
        <div class="clearfix"></div>
        <footer class="row">
        	<p>&copy; Copyright 2015 KFC. All Right Reserved</p>
            <p>Food shown are for illustration purpose only. Actual product may differ from the images showm in this website. Prices indicated above is not vaild in the states of Gujrat, Maharashtra & Karnataka</p>
            <p>* The KFC name. Logos. and related marks are trademarks of KFC Inc.</p>
        </footer>
        
	</div>	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Alert</h4>
		  </div>
		  <div class="modal-body">
			<p></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	<script type="text/javascript" src="media/js/jquery-1.11.3.min.js" ></script>
	<script type="text/javascript" src="media/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="media/js/jquery.validate.js"></script>
	<script type="text/javascript" src="media/js/jquery.multiple.select.js" ></script>
	<script type="text/javascript" src="media/js/main.js??bpc=<?php echo $bpc; ?>" ></script>
  </body>
</html>