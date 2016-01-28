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
		<header class="marginTop-30">
        	<div class="col-lg-9 col-md-9">
            	<p><img src="media/images/kfc_treat.png" class="img-responsive"></p>
                <p class="main-head">Get KFC's Finger-Lickin’ range in office and boost the productivity quotient!</p>
            </div>
            
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            	<h1 class="pull-right"><img src="media/images/logo.png?bpc=<?php echo $bpc; ?>" class="img-responsive"></h1>
            </div>
        	<div class="clearfix"></div>    
        </header>
		<section class="w100fl">
			<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style="margin-top:46px"><img src="media/images/kfc_left-1.png" class="img-responsive"></div>
            <div class="col-lg-5 col-md-5 col-sm-6 rel">
            	<span class="aro hidden-xs"></span>
				<ul class="best-list">
                	<li class="imga">Gift your employees the best rewards</li>
                    <li class="imgb">Call us for your office catering</li>
                    <li class="imgc">Or get the best deals for your employees</li>
				</ul>
            </div>
			<div class="col-lg-5 col-md-5 col-sm-6">
            	<div class="register-form">
                	<p>Leave your details with us, and we will get in touch with you</p>
					<div class="form-wrap">
						<form role="form" id="LeadSave" class="userform" method="post">
						  <div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="home-icon"></span></span>
							<input type="text" name="name" id="name" placeholder="Name"  class="form-control"  maxlength="50" />
						  </div>
						  <div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="email-icon"></span></span>
							<input type="email" class="form-control" placeholder="Email" name="email" id="email" maxlength="70" />
						  </div>
						  <div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="mobile-icon"></span></span>
							<input type="text" name="mobile" placeholder="Mobile No" class="form-control" id="mobile" maxlength="12">
						  </div>
						  <div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="company-icon"></span></span>
							<input type="text" name="company" placeholder="Company" class="form-control" id="company" maxlength="100">
						  </div>
						  <div class="form-group" style="min-height:59px;">
							<div>							
								<select class="form-control" name="city" id="id_CandidateLocation">
								   <option value="">- Select City -</option>
								   <optgroup label="Top Cities">
									  <option>Bangalore</option>
									  <option>Chennai</option>
									  <option>Delhi</option>
									  <option>Gurgaon</option>
									  <option>Hyderabad</option>
									  <option>Kolkata</option>
									  <option>Mumbai</option>
									  <option>Navi Mumbai</option>
									  <option>Thane</option>
									  <option>Noida</option>
									  <option>Pune</option>
								   </optgroup>
								   <optgroup label="Andaman-Nicobar">
									  <option>Port Blair</option>
									  <option>Other Andaman-Nicobar</option>
								   </optgroup>
								   <optgroup label="Andhra Pradesh">
									  <option>Anantpur</option>
									  <option>Guntakal</option>
									  <option>Guntur</option>
									  <option>Hyderabad</option>
									  <option>Kakinada</option>
									  <option>Kurnool</option>
									  <option>Nellore</option>
									  <option>Rajahmundry</option>
									  <option>Tirupati</option>
									  <option>Vijayawada</option>
									  <option>Vishakhapatnam</option>
									  <option>Other Andhra Pradesh</option>
								   </optgroup>
								   <optgroup label="Arunachal Pradesh">
									  <option>Itanagar</option>
									  <option >Other Arunachal Pradesh</option>
								   </optgroup>
								   <optgroup label="Assam">
									  <option >Dhubri</option>
									  <option >Dibrugarh</option>
									  <option 
									  >Guwahati</option>
									  <option >Silchar</option>
									  <option >Other Assam</option>
								   </optgroup>
								   <optgroup label="Bihar">
									  <option >Bhagalpur</option>
									  <option >Muzzafarpur</option>
									  <option >Patna</option>
									  <option >Other Bihar</option>
								   </optgroup>
								   <optgroup label="Chandigarh Region">
									  <option >Chandigarh</option>
									  <option >Mohali</option>
									  <option >Panchkula</option>
								   </optgroup>
								   <optgroup label="Chattisgarh">
									  <option >Bhillai</option>
									  <option >Bilaspur</option>
									  <option >Korba</option>
									  <option >Raigarh</option>
									  <option >Raipur</option>
									  <option >Other Chattisgarh</option>
								   </optgroup>
								   <optgroup label="Dadar and Nagar Haveli">
									  <option >Silvassa</option>
									  <option >Other Dadar and Nagar Haveli</option>
								   </optgroup>
								   <optgroup label="Daman-Diu">
									  <option >Daman</option>
									  <option >Other Daman-Diu</option>
								   </optgroup>
								   <optgroup label="Delhi-NCR Region">
									  <option >Delhi</option>
									  <option >Faridabad</option>
									  <option >Ghaziabad</option>
									  <option >Gurgaon</option>
									  <option >Noida</option>
								   </optgroup>
								   <optgroup label="Goa">
									  <option >Panaji</option>
									  <option >Vasco da Gama</option>
									  <option >Other Goa</option>
								   </optgroup>
								   <optgroup label="Gujarat">
									  <option >Ahmedabad</option>
									  <option >Anand</option>
									  <option >Ankleshwar</option>
									  <option >Bharuch</option>
									  <option >Bhavnagar</option>
									  <option >Bhuj</option>
									  <option >Gandhidham</option>
									  <option >Gandhinagar</option>
									  <option >Gir</option>
									  <option >Jamnagar</option>
									  <option >Junagarh</option>
									  <option >Kandla</option>
									  <option >Mehsana</option>
									  <option >Porbandar</option>
									  <option >Rajkot</option>
									  <option >Surat</option>
									  <option >Vadodara</option>
									  <option >Valsad</option>
									  <option >Vapi</option>
									  <option >Other Gujarat</option>
								   </optgroup>
								   <optgroup label="Haryana">
									  <option >Ambala</option>
									  <option >Bhiwani</option>
									  <option >Faridabad</option>
									  <option >Gurgaon</option>
									  <option >Hisar</option>
									  <option >Karnal</option>
									  <option >Kurukshetra</option>
									  <option >Panchkula</option>
									  <option >Panipat</option>
									  <option >Rewari</option>
									  <option >Rohtak</option>
									  <option >Sirsa</option>
									  <option >Sonipat</option>
									  <option >Yamunanagar</option>
									  <option >Other Haryana</option>
								   </optgroup>
								   <optgroup label="Himachal Pradesh">
									  <option >Baddi</option>
									  <option >Bilaspur</option>
									  <option >Chamba</option>
									  <option >Dalhousie</option>
									  <option >Dharamsala</option>
									  <option >Kullu</option>
									  <option >Mandi</option>
									  <option >Shimla</option>
									  <option >Solan</option>
									  <option >Other Himachal Pradesh</option>
								   </optgroup>
								   <optgroup label="Jammu-Kashmir">
									  <option >Anantnag</option>
									  <option >Baramulla</option>
									  <option >Jammu</option>
									  <option >Srinagar</option>
									  <option >Other Jammu-Kashmir</option>
								   </optgroup>
								   <optgroup label="Jharkhand">
									  <option >Bokaro</option>
									  <option >Dhanbad</option>
									  <option >Jamshedpur</option>
									  <option >Ranchi</option>
									  <option >Other Jharkhand</option>
								   </optgroup>
								   <optgroup label="Karnataka">
									  <option >Bangalore</option>
									  <option >Belgaum</option>
									  <option >Bellary</option>
									  <option >Bidar</option>
									  <option >Davanagere</option>
									  <option >Dharwad</option>
									  <option >Gulbarga</option>
									  <option >Hubli</option>
									  <option >Kolar</option>
									  <option >Mangalore</option>
									  <option >Mysore</option>
									  <option >Other Karnataka</option>
								   </optgroup>
								   <optgroup label="Kerala">
									  <option >Idukki</option>
									  <option >Kannur</option>
									  <option >Kasargod</option>
									  <option >Kochi</option>
									  <option >Kollam</option>
									  <option >Kottayam</option>
									  <option >Kozhikode</option>
									  <option >Malappuram</option>
									  <option >Palakkad</option>
									  <option >Pathanamthitta</option>
									  <option >Thiruvanananthapuram</option>
									  <option >Thrissur</option>
									  <option >Wayanad</option>
									  <option >Other Kerala</option>
								   </optgroup>
								   <optgroup label="Lakshadweep">
									  <option >Kavaratti</option>
									  <option >Other Lakshadweep</option>
								   </optgroup>
								   <optgroup label="Madhya Pradesh">
									  <option >Bhopal</option>
									  <option >Gwalior</option>
									  <option >Indore</option>
									  <option >Jabalpur</option>
									  <option >Katni</option>
									  <option >Ratlam</option>
									  <option >Sagar</option>
									  <option >Satna</option>
									  <option >Ujjain</option>
									  <option >Other Madhya Pradesh</option>
								   </optgroup>
								   <optgroup label="Maharashtra">
									  <option >Ahmednagar</option>
									  <option >Akola</option>
									  <option >Amravati</option>
									  <option >Aurangabad</option>
									  <option >Chandrapur</option>
									  <option >Dhule</option>
									  <option >Jalgaon</option>
									  <option >Kolhapur</option>
									  <option >Latur</option>
									  <option >Mumbai</option>
									  <option >Navi Mumbai</option>
									  <option >Thane</option>
									  <option >Nagpur</option>
									  <option >Nanded</option>
									  <option >Nashik</option>
									  <option >Pune</option>
									  <option >Ratnagiri</option>
									  <option >Sangli</option>
									  <option >Satara</option>
									  <option >Solapur</option>
									  <option >Yavatmal</option>
									  <option >Other Maharashtra</option>
								   </optgroup>
								   <optgroup label="Manipur">
									  <option >Imphal</option>
									  <option >Other Manipur</option>
								   </optgroup>
								   <optgroup label="Meghalaya">
									  <option >Shillong</option>
									  <option >Other Meghalaya</option>
								   </optgroup>
								   <optgroup label="Mizoram">
									  <option >Aizawl</option>
									  <option >Other Mizoram</option>
								   </optgroup>
								   <optgroup label="Nagaland">
									  <option >Dimapur</option>
									  <option >Kohima</option>
									  <option >Other Nagaland</option>
								   </optgroup>
								   <optgroup label="Orrisa">
									  <option >Bhubaneswar</option>
									  <option >Cuttack</option>
									  <option >Jharsuguda</option>
									  <option >Paradeep</option>
									  <option >Puri</option>
									  <option >Rourkela</option>
									  <option >Sambalpur</option>
									  <option >Other Orrisa</option>
								   </optgroup>
								   <optgroup label="Pondicherry">
									  <option>Pondicherry</option>
								   </optgroup>
								   <optgroup label="Punjab">
									  <option >Amritsar</option>
									  <option >Bathinda</option>
									  <option >Fatehgarh Sahib</option>
									  <option >Ferozpur</option>
									  <option >Gurdaspur</option>
									  <option >Hoshiarpur</option>
									  <option >Jalandhar</option>
									  <option >Kapurthala</option>
									  <option >Ludhiana</option>
									  <option >Moga</option>
									  <option >Mohali</option>
									  <option >Pathankot</option>
									  <option >Patiala</option>
									  <option >Ropar</option>
									  <option >Sangrur</option>
									  <option >Other Punjab</option>
								   </optgroup>
								   <optgroup label="Rajasthan">
									  <option >Ajmer</option>
									  <option >Alwar</option>
									  <option >Bhilwara</option>
									  <option >Bikaner</option>
									  <option >Jaipur</option>
									  <option >Jaisalmer</option>
									  <option >Jodhpur</option>
									  <option >Kota</option>
									  <option >Udaipur</option>
									  <option >Other Rajasthan</option>
								   </optgroup>
								   <optgroup label="Sikkim">
									  <option >Gangtok</option>
									  <option >Other Sikkim</option>
								   </optgroup>
								   <optgroup label="Tamil Nadu">
									  <option >Chennai</option>
									  <option >Coimbatore</option>
									  <option >Cuddalore</option>
									  <option >Erode</option>
									  <option >Hosur</option>
									  <option >Madurai</option>
									  <option >Nagercoil</option>
									  <option >Ooty</option>
									  <option >Salem</option>
									  <option >Thanjavur</option>
									  <option >Thirunelveli</option>
									  <option >Tiruchirappalli</option>
									  <option >Tuticorin</option>
									  <option >Vellore</option>
									  <option >Other Tamil Nadu</option>
								   </optgroup>
								   <optgroup label="Telangana">
									  <option >Hyderabad</option>
									  <option >Nizamabad</option>
									  <option >Warangal</option>
									  <option >Other Telangana</option>
								   </optgroup>
								   <optgroup label="Tripura">
									  <option >Agartala</option>
									  <option >Other Tripura</option>
								   </optgroup>
								   <optgroup label="Uttar Pradesh">
									  <option >Agra</option>
									  <option >Aligarh</option>
									  <option >Allahabad</option>
									  <option >Bareilly</option>
									  <option >Faizabad</option>
									  <option >Ghaziabad</option>
									  <option >Gorakhpur</option>
									  <option >Kanpur</option>
									  <option >Lucknow</option>
									  <option >Mathura</option>
									  <option >Meerut</option>
									  <option >Moradabad</option>
									  <option >Muzzafarnagar</option>
									  <option >Noida</option>
									  <option >Saharanpur</option>
									  <option >Varanasi</option>
									  <option >Other Uttar Pradesh</option>
								   </optgroup>
								   <optgroup label="Uttarakhand">
									  <option >Dehradun</option>
									  <option >Haldwani</option>
									  <option >Haridwar</option>
									  <option >Kashipur</option>
									  <option >Nainital</option>
									  <option >Roorkee</option>
									  <option >Rudrapur</option>
									  <option >Other Uttarakhand</option>
								   </optgroup>
								   <optgroup label="West Bengal">
									  <option >Asansol</option>
									  <option >Burdwan</option>
									  <option >Durgapur</option>
									  <option >Haldia</option>
									  <option >Kharagpur</option>
									  <option >Kolkata</option>
									  <option >Siliguri</option>
									  <option >Other West Bengal</option>
								   </optgroup>
								</select>
							</div>	
						  </div>
						  <div class="form-group marginBottom-0">
							<input type="hidden" name="id" value="save" />
							<button type="submit" class="btn btn-default btn-register pull-right">Register</button>
							<div class="clearfix"></div>  
						  </div>	
					</form>
				</div>	
			
                </div>
            </div>
        </section><!-- Form widget ends here -->
        <div class="clearfix"></div> 
        <section>
        	<div class="form-bottom rel">
        		<span class="happy-emp-img hidden-xs"><img src="media/images/form-bottom-img.png" class="img-responsive"></span>
            	
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