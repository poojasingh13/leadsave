<?php
include_once("global_var.php");
include_once("queries.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){ 	
		$user = new newuser();
		$user->name = $_POST["name"];
		$user->email = $_POST["email"];
		$user->mobile = $_POST["mobile"];
		$user->city = $_POST["city"];
		
		$user->createNewUser();	
		
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>American Express Merchant</title>

    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body >
    <div>
		<form class="userform" action="" method="post">
			<ul>
				<li>
					<input type="text"  name="name" maxlength="50" placeholder="Name"/>
				</li>
				<li>
					<input type="text"  name="email" maxlength="50" placeholder="Email"/>
				</li>
				<li>
					<input type="text"  name="mobile" maxlength="10" placeholder="Mobile"/>
				</li>
				<li>
					<select name="city" id="id_CandidateLocation">
					   <option value="">- Select City -</option>
					   <optgroup label="Top Cities">
						  <option value="243">Bangalore</option>
						  <option value="244">Chennai</option>
						  <option value="406">Delhi</option>
						  <option value="423">Gurgaon</option>
						  <option value="246">Hyderabad</option>
						  <option value="247">Kolkata</option>
						  <option value="437">Mumbai</option>
						  <option value="522">Navi Mumbai</option>
						  <option value="523">Thane</option>
						  <option value="453">Noida</option>
						  <option value="249">Pune</option>
					   </optgroup>
					   <optgroup label="Andaman-Nicobar">
						  <option value="251">Port Blair</option>
						  <option value="250">Other Andaman-Nicobar</option>
					   </optgroup>
					   <optgroup label="Andhra Pradesh">
						  <option value="252">Anantpur</option>
						  <option value="401">Guntakal</option>
						  <option value="254">Guntur</option>
						  <option value="246">Hyderabad</option>
						  <option value="459">Kakinada</option>
						  <option value="255">Kurnool</option>
						  <option value="256">Nellore</option>
						  <option value="398">Rajahmundry</option>
						  <option value="399">Tirupati</option>
						  <option value="400">Vijayawada</option>
						  <option value="258">Vishakhapatnam</option>
						  <option value="257">Other Andhra Pradesh</option>
					   </optgroup>
					   <optgroup label="Arunachal Pradesh">
						  <option value="261">Itanagar</option>
						  <option value="262">Other Arunachal Pradesh</option>
					   </optgroup>
					   <optgroup label="Assam">
						  <option value="469">Dhubri</option>
						  <option value="460">Dibrugarh</option>
						  <option value="263">Guwahati</option>
						  <option value="403">Silchar</option>
						  <option value="264">Other Assam</option>
					   </optgroup>
					   <optgroup label="Bihar">
						  <option value="266">Bhagalpur</option>
						  <option value="470">Muzzafarpur</option>
						  <option value="272">Patna</option>
						  <option value="271">Other Bihar</option>
					   </optgroup>
					   <optgroup label="Chandigarh Region">
						  <option value="404">Chandigarh</option>
						  <option value="442">Mohali</option>
						  <option value="418">Panchkula</option>
					   </optgroup>
					   <optgroup label="Chattisgarh">
						  <option value="405">Bhillai</option>
						  <option value="275">Bilaspur</option>
						  <option value="471">Korba</option>
						  <option value="472">Raigarh</option>
						  <option value="278">Raipur</option>
						  <option value="277">Other Chattisgarh</option>
					   </optgroup>
					   <optgroup label="Dadar and Nagar Haveli">
						  <option value="280">Silvassa</option>
						  <option value="279">Other Dadar and Nagar Haveli</option>
					   </optgroup>
					   <optgroup label="Daman-Diu">
						  <option value="281">Daman</option>
						  <option value="282">Other Daman-Diu</option>
					   </optgroup>
					   <optgroup label="Delhi-NCR Region">
						  <option value="406">Delhi</option>
						  <option value="424">Faridabad</option>
						  <option value="454">Ghaziabad</option>
						  <option value="423">Gurgaon</option>
						  <option value="453">Noida</option>
					   </optgroup>
					   <optgroup label="Goa">
						  <option value="284">Panaji</option>
						  <option value="407">Vasco da Gama</option>
						  <option value="283">Other Goa</option>
					   </optgroup>
					   <optgroup label="Gujarat">
						  <option value="285">Ahmedabad</option>
						  <option value="413">Anand</option>
						  <option value="409">Ankleshwar</option>
						  <option value="414">Bharuch</option>
						  <option value="415">Bhavnagar</option>
						  <option value="411">Bhuj</option>
						  <option value="474">Gandhidham</option>
						  <option value="286">Gandhinagar</option>
						  <option value="412">Gir</option>
						  <option value="287">Jamnagar</option>
						  <option value="473">Junagarh</option>
						  <option value="408">Kandla</option>
						  <option value="461">Mehsana</option>
						  <option value="416">Porbandar</option>
						  <option value="289">Rajkot</option>
						  <option value="290">Surat</option>
						  <option value="291">Vadodara</option>
						  <option value="417">Valsad</option>
						  <option value="410">Vapi</option>
						  <option value="288">Other Gujarat</option>
					   </optgroup>
					   <optgroup label="Haryana">
						  <option value="419">Ambala</option>
						  <option value="475">Bhiwani</option>
						  <option value="424">Faridabad</option>
						  <option value="423">Gurgaon</option>
						  <option value="420">Hisar</option>
						  <option value="421">Karnal</option>
						  <option value="422">Kurukshetra</option>
						  <option value="418">Panchkula</option>
						  <option value="293">Panipat</option>
						  <option value="476">Rewari</option>
						  <option value="425">Rohtak</option>
						  <option value="477">Sirsa</option>
						  <option value="478">Sonipat</option>
						  <option value="479">Yamunanagar</option>
						  <option value="292">Other Haryana</option>
					   </optgroup>
					   <optgroup label="Himachal Pradesh">
						  <option value="462">Baddi</option>
						  <option value="480">Bilaspur</option>
						  <option value="481">Chamba</option>
						  <option value="428">Dalhousie</option>
						  <option value="427">Dharamsala</option>
						  <option value="426">Kullu</option>
						  <option value="482">Mandi</option>
						  <option value="296">Shimla</option>
						  <option value="483">Solan</option>
						  <option value="295">Other Himachal Pradesh</option>
					   </optgroup>
					   <optgroup label="Jammu-Kashmir">
						  <option value="484">Anantnag</option>
						  <option value="485">Baramulla</option>
						  <option value="297">Jammu</option>
						  <option value="299">Srinagar</option>
						  <option value="298">Other Jammu-Kashmir</option>
					   </optgroup>
					   <optgroup label="Jharkhand">
						  <option value="300">Bokaro</option>
						  <option value="301">Dhanbad</option>
						  <option value="303">Jamshedpur</option>
						  <option value="305">Ranchi</option>
						  <option value="304">Other Jharkhand</option>
					   </optgroup>
					   <optgroup label="Karnataka">
						  <option value="243">Bangalore</option>
						  <option value="306">Belgaum</option>
						  <option value="432">Bellary</option>
						  <option value="433">Bidar</option>
						  <option value="463">Davanagere</option>
						  <option value="431">Dharwad</option>
						  <option value="434">Gulbarga</option>
						  <option value="429">Hubli</option>
						  <option value="430">Kolar</option>
						  <option value="307">Mangalore</option>
						  <option value="308">Mysore</option>
						  <option value="309">Other Karnataka</option>
					   </optgroup>
					   <optgroup label="Kerala">
						  <option value="486">Idukki</option>
						  <option value="436">Kannur</option>
						  <option value="488">Kasargod</option>
						  <option value="310">Kochi</option>
						  <option value="435">Kollam</option>
						  <option value="311">Kottayam</option>
						  <option value="312">Kozhikode</option>
						  <option value="487">Malappuram</option>
						  <option value="314">Palakkad</option>
						  <option value="489">Pathanamthitta</option>
						  <option value="315">Thiruvanananthapuram</option>
						  <option value="316">Thrissur</option>
						  <option value="490">Wayanad</option>
						  <option value="313">Other Kerala</option>
					   </optgroup>
					   <optgroup label="Lakshadweep">
						  <option value="317">Kavaratti</option>
						  <option value="318">Other Lakshadweep</option>
					   </optgroup>
					   <optgroup label="Madhya Pradesh">
						  <option value="319">Bhopal</option>
						  <option value="320">Gwalior</option>
						  <option value="321">Indore</option>
						  <option value="322">Jabalpur</option>
						  <option value="491">Katni</option>
						  <option value="492">Ratlam</option>
						  <option value="493">Sagar</option>
						  <option value="494">Satna</option>
						  <option value="324">Ujjain</option>
						  <option value="323">Other Madhya Pradesh</option>
					   </optgroup>
					   <optgroup label="Maharashtra">
						  <option value="325">Ahmednagar</option>
						  <option value="495">Akola</option>
						  <option value="496">Amravati</option>
						  <option value="326">Aurangabad</option>
						  <option value="464">Chandrapur</option>
						  <option value="497">Dhule</option>
						  <option value="327">Jalgaon</option>
						  <option value="328">Kolhapur</option>
						  <option value="498">Latur</option>
						  <option value="437">Mumbai</option>
						  <option value="522">Navi Mumbai</option>
						  <option value="523">Thane</option>
						  <option value="329">Nagpur</option>
						  <option value="499">Nanded</option>
						  <option value="330">Nashik</option>
						  <option value="249">Pune</option>
						  <option value="500">Ratnagiri</option>
						  <option value="501">Sangli</option>
						  <option value="502">Satara</option>
						  <option value="332">Solapur</option>
						  <option value="503">Yavatmal</option>
						  <option value="331">Other Maharashtra</option>
					   </optgroup>
					   <optgroup label="Manipur">
						  <option value="333">Imphal</option>
						  <option value="334">Other Manipur</option>
					   </optgroup>
					   <optgroup label="Meghalaya">
						  <option value="336">Shillong</option>
						  <option value="335">Other Meghalaya</option>
					   </optgroup>
					   <optgroup label="Mizoram">
						  <option value="337">Aizawl</option>
						  <option value="338">Other Mizoram</option>
					   </optgroup>
					   <optgroup label="Nagaland">
						  <option value="440">Dimapur</option>
						  <option value="339">Kohima</option>
						  <option value="340">Other Nagaland</option>
					   </optgroup>
					   <optgroup label="Orrisa">
						  <option value="341">Bhubaneswar</option>
						  <option value="342">Cuttack</option>
						  <option value="504">Jharsuguda</option>
						  <option value="465">Paradeep</option>
						  <option value="344">Puri</option>
						  <option value="441">Rourkela</option>
						  <option value="505">Sambalpur</option>
						  <option value="343">Other Orrisa</option>
					   </optgroup>
					   <optgroup label="Pondicherry">
						  <option value="346">Pondicherry</option>
					   </optgroup>
					   <optgroup label="Punjab">
						  <option value="347">Amritsar</option>
						  <option value="444">Bathinda</option>
						  <option value="506">Fatehgarh Sahib</option>
						  <option value="507">Ferozpur</option>
						  <option value="508">Gurdaspur</option>
						  <option value="509">Hoshiarpur</option>
						  <option value="348">Jalandhar</option>
						  <option value="510">Kapurthala</option>
						  <option value="349">Ludhiana</option>
						  <option value="511">Moga</option>
						  <option value="442">Mohali</option>
						  <option value="443">Pathankot</option>
						  <option value="445">Patiala</option>
						  <option value="512">Ropar</option>
						  <option value="513">Sangrur</option>
						  <option value="350">Other Punjab</option>
					   </optgroup>
					   <optgroup label="Rajasthan">
						  <option value="351">Ajmer</option>
						  <option value="514">Alwar</option>
						  <option value="516">Bhilwara</option>
						  <option value="515">Bikaner</option>
						  <option value="353">Jaipur</option>
						  <option value="354">Jaisalmer</option>
						  <option value="355">Jodhpur</option>
						  <option value="356">Kota</option>
						  <option value="358">Udaipur</option>
						  <option value="357">Other Rajasthan</option>
					   </optgroup>
					   <optgroup label="Sikkim">
						  <option value="359">Gangtok</option>
						  <option value="360">Other Sikkim</option>
					   </optgroup>
					   <optgroup label="Tamil Nadu">
						  <option value="244">Chennai</option>
						  <option value="361">Coimbatore</option>
						  <option value="450">Cuddalore</option>
						  <option value="362">Erode</option>
						  <option value="446">Hosur</option>
						  <option value="364">Madurai</option>
						  <option value="447">Nagercoil</option>
						  <option value="448">Ooty</option>
						  <option value="366">Salem</option>
						  <option value="451">Thanjavur</option>
						  <option value="452">Thirunelveli</option>
						  <option value="367">Tiruchirappalli</option>
						  <option value="449">Tuticorin</option>
						  <option value="368">Vellore</option>
						  <option value="365">Other Tamil Nadu</option>
					   </optgroup>
					   <optgroup label="Telangana">
						  <option value="246">Hyderabad</option>
						  <option value="402">Nizamabad</option>
						  <option value="260">Warangal</option>
						  <option value="458">Other Telangana</option>
					   </optgroup>
					   <optgroup label="Tripura">
						  <option value="369">Agartala</option>
						  <option value="370">Other Tripura</option>
					   </optgroup>
					   <optgroup label="Uttar Pradesh">
						  <option value="371">Agra</option>
						  <option value="372">Aligarh</option>
						  <option value="373">Allahabad</option>
						  <option value="374">Bareilly</option>
						  <option value="455">Faizabad</option>
						  <option value="454">Ghaziabad</option>
						  <option value="375">Gorakhpur</option>
						  <option value="377">Kanpur</option>
						  <option value="378">Lucknow</option>
						  <option value="379">Mathura</option>
						  <option value="380">Meerut</option>
						  <option value="381">Moradabad</option>
						  <option value="517">Muzzafarnagar</option>
						  <option value="453">Noida</option>
						  <option value="466">Saharanpur</option>
						  <option value="385">Varanasi</option>
						  <option value="383">Other Uttar Pradesh</option>
					   </optgroup>
					   <optgroup label="Uttarakhand">
						  <option value="386">Dehradun</option>
						  <option value="467">Haldwani</option>
						  <option value="519">Haridwar</option>
						  <option value="518">Kashipur</option>
						  <option value="520">Nainital</option>
						  <option value="456">Roorkee</option>
						  <option value="521">Rudrapur</option>
						  <option value="389">Other Uttarakhand</option>
					   </optgroup>
					   <optgroup label="West Bengal">
						  <option value="393">Asansol</option>
						  <option value="468">Burdwan</option>
						  <option value="395">Durgapur</option>
						  <option value="396">Haldia</option>
						  <option value="457">Kharagpur</option>
						  <option value="247">Kolkata</option>
						  <option value="397">Siliguri</option>
						  <option value="391">Other West Bengal</option>
					   </optgroup>
					</select>
				</li>
			</ul>
			<input type="submit" value="submit"/>
		</form>
	</div>
  </body>
</html>