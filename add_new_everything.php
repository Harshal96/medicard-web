<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "css/addnew.css">
    </head>
<style>
body {
    font-family: "Lato", sans-serif;
    margin-left: 3px;
    margin-right: 3px;
    margin-bottom: 0;
    margin-top: 0;
    padding: 0;
}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    text-align: center;
}

/* Float the list items side by side */
ul.tab li {float: none; display: inline;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

.topright {
 float: right;
 cursor: pointer;
 font-size: 20px;
}

.topright:hover {color: red;}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
<body class = "bg-cyan">

<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Doctor')" id="defaultOpen">Add A Doctor</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Patient')">Add a Patient</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Diagnostic')">Add a Diagnostic</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Hospital')">Add a Hospital/Clinic</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Pharmacist')">Add a Pharmacist</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Admin')">Add an Admin</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Medicine')">Add Medicine</a></li>
</ul>

<div id="Doctor" class="tabcontent bg-cyan">
  <div class="body body-s">
			<form class="sky-form" method="post" action="insert_doctor.php">
               <!-- <input type="hidden" name="type" value="doctor"> -->
				<header align = "center">Add a Doctor</header>
				
				<fieldset>
                    <div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Doctor ID" id="doctor_id" name="doctor_id">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="First name" id="first_name" name="first_name">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Middle name" id="middle_name" name="middle_name">
							</label>
						</section>
                        <div class = "aligncenter">
                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" placeholder="Last name" id="last_name" name="last_name">
                                </label>
                            </section>
                        </div>
					</div>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>					
					<section>
						<label class="select">
							<select name="gender_d">
								<option value="0" selected disabled>Gender</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
								<option value="3">Other</option>
							</select>
							<i></i>
						</label>
					</section>
					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone" name="phone">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Emergency Contact" id="e_contact" name="e_contact">
                        </label>
				    </section>
					
                    <section class="col col-4">
							<label class="select">
								<select name="date" id="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month" id="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
				</fieldset>
                            
                <fieldset>
                        <section>
						<label class="input">
							<input type="text" placeholder="College\University" id="college" name="college">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					   </section>
                        <section>
							<label class="select">
								<select name="degree" id="degree">
									<option value="0" selected disabled>Degree</option>
									<option value="1">MBBS</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                        
                        <label class="label">Degree date</label>
                        <section class="col col-4">
							<label class="select">
								<select name="degree_date" id="degree_date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="degree_month" id="degree_month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="degree_year" name="degree_year">
							</label>
						</section>
                        
                        <section>
                            <label class="label">Degree Photo</label>
                            <label for="file" class="input input-file">
                                <div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
                            </label>
                            <div class="note note-error">File size must be less than 3Mb</div>
					   </section>
                </fieldset>
                            
                <fieldset>
                        <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Aadhar Card Number" id="aadhar_no" name="aadhar_no">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                            
                    <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Passport Number" id="passport_no" name="passport_no">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                </fieldset>
                            
                <fieldset>
                        <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Blood Group" id="blood_grp" name="blood_grp">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                            
                   <section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Allergies" id="allergies" name="allergies"></textarea>
						</label>
					</section>
                </fieldset>
                           
                <fieldset>
					<div class="row">
						<section class="col col-4">
							<label class="select">
								<select name="country" id="country">
									<option value="0" selected disabled>Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, skypolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="241">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="240">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="113">Korea, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
								<select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="City" id="city" name="city">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="state" id="state" name="state">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="Pin code" id="pincode" name="pincode">
							</label>
						</section>
					</div>
					
					<section>
						<label for="file" class="input">
							<input type="tel" placeholder="Address" id="address" name="address">
						</label>
					</section>
					
					<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="street" id="street" name="street">
							</label>
						</section>
					
					<section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Landmarks" id="landmark" name="landmark"></textarea>
						</label>
					</section>
				</fieldset>
                        
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
				<footer>
					<button type="submit" class="button" id="submit" name="submit">Submit</button>
				</footer>
			</form>
			
    </div>
</div>

<div id="Patient" class="tabcontent bg-cyan">
  <div class="body body-s">
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="patient">
				<header align = "center">Add a Patient</header>
				
				<fieldset>
                    <div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="First name" id="first_name" name="first_name">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Middle name" id="middle_name" name="middle_name">
							</label>
						</section>
                        <div class = "aligncenter">
                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" placeholder="Last name" id="last_name" name="last_name">
                                </label>
                            </section>
                        </div>
					</div>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>					
					<section>
						<label class="select">
							<select name="gender">
								<option value="0" selected disabled>Gender</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
								<option value="3">Other</option>
							</select>
							<i></i>
						</label>
					</section>
					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone" name="phone">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Emergency Contact" id="e_contact" name="e_contact">
                        </label>
				    </section>
					
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
				</fieldset>
                            
                <fieldset>
                        <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Aadhar Card Number" id="aadhar_no" name="aadhar_no">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                            
                    <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Passport Number" id="passport_no" name="passport_no">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                </fieldset>
                            
                <fieldset>
                        <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Blood Group" id="blood_grp" name="blood_grp">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                            
                   <section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Allergies" id="allergies" name="allergies"></textarea>
						</label>
					</section>
                </fieldset>
                           
                <fieldset>
					<div class="row">
						<section class="col col-4">
							<label class="select">
								<select name="country">
									<option value="0" selected disabled>Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, skypolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="241">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="240">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="113">Korea, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
								<select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="City" id="city" name="city">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="Pin code" id="pincode" name="pincode">
							</label>
						</section>
					</div>
					
					<section>
						<label for="file" class="input">
							<input type="tel" placeholder="Address" id="address" name="address">
						</label>
					</section>
					
					<section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Landmarks" id="landmark" name="landmark"></textarea>
						</label>
					</section>
				</fieldset>
                        
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
				<footer>
					<button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
			</form>
			
		</div>
</div>

<div id="Diagnostic" class="tabcontent bg-cyan">
  <div class="body body-s">
		
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="diagnostic">
				<header align = "center">Add a Diagnostic</header>
				
				<fieldset>
                    <section>
						<label class="input">
							<input type="text" placeholder="Name" id="name" name="name">
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone1" name="phone1">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone2" name="phone2">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone3" name="phone3">
                        </label>
				    </section>
                </fieldset>
                    
                    <fieldset>
				    <label class="label">Operating Since</label>
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
                            </fieldset>
                            
                                <fieldset>
                        <section>
                            <label class="input">
                                <input type="text" placeholder="Operating Hours" id="operating_hrs" name="operating_hrs">
                            </label>
					    </section>
                                
                        <section>
                            <label class="label"></label>
                            <label class="textarea">
                                <textarea rows="3" placeholder="Services" id="services" name="services"></textarea>
                            </label>
					   </section>
				</fieldset>
                           
                <fieldset>
					<div class="row">
						<section class="col col-4">
							<label class="select">
								<select name="country">
									<option value="0" selected disabled>Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, skypolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="241">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="240">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="113">Korea, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
								<select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="City" id="city" name="city">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="Pin code" id="pincode" name="pincode">
							</label>
						</section>
					</div>
					
					<section>
						<label for="file" class="input">
							<input type="tel" placeholder="Address" id="address" name="address">
						</label>
					</section>
					
					<section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Landmarks" id="landmark" name="landmark"></textarea>
						</label>
					</section>
				</fieldset>
                        
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
                        
                <fieldset>
                        <section>
                            <label for="file" class="input">
                                <input type="tel" placeholder="Operating Under Doctor (ID or Name)" id="d_name" name="d_name">
                            </label>
					   </section>
                </fieldset>
				<footer>
				    <button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
			</form>
			
		</div>
</div>

<div id="Hospital" class="tabcontent bg-cyan">
  <div class="body body-s">
		
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="hospital">
				<header align = "center">Add a Hospital</header>
				
				<fieldset>
                    <section>
						<label class="input">
							<input type="text" placeholder="Name" id="name" name="name">
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone1" name="phone1">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone2" name="phone2">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone3" name="phone3">
                        </label>
				    </section>
                </fieldset>
                
                    <fieldset>
				    <label class="label">Operating Since</label>
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
                            </fieldset>
                                
                        <fieldset>        
                        <section>
                            <label class="input">
                                <input type="text" placeholder="Operating Hours" id="operating_hrs" name="operating_hrs">
                            </label>
					    </section>
                                
                        <section>
                            <label class="label"></label>
                            <label class="textarea">
                                <textarea rows="3" placeholder="Services" id="services" name="services"></textarea>
                            </label>
					   </section>
				</fieldset>
                           
                <fieldset>
					<div class="row">
						<section class="col col-4">
							<label class="select">
								<select name="country">
									<option value="0" selected disabled>Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, skypolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="241">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="240">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="113">Korea, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
								<select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="City" id="city" name="city">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="Pin code" id="pincode" name="pincode">
							</label>
						</section>
					</div>
					
					<section>
						<label for="file" class="input">
							<input type="tel" placeholder="Address" id="address" name="address">
						</label>
					</section>
					
					<section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Landmarks" id="landmark" name="landmark"></textarea>
						</label>
					</section>
				</fieldset>
                        
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
                        
				<footer>
					<button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
			</form>
			
		</div>
</div>
    
<div id="Pharmacist" class="tabcontent bg-cyan">
  <div class="body body-s">
		
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="pharmacist">
				<header align = "center">Add a Pharmacist</header>
				
				<fieldset>
                    <section>
						<label class="input">
							<input type="text" placeholder="Name" id="name" name="name">
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>					
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone1" name="phone1">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone2" name="phone2">
                        </label>
				    </section>
                    
                    <section>
                        <label class="input">
                            <i class="icon-append icon-phone"></i>
                            <input type="tel" placeholder="Phone" id="phone3" name="phone3">
                        </label>
				    </section>
                </fieldset>
                    
                    <fieldset>
				    <label class="label">Operating Since</label>
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
                            </fieldset>
                                
                                <fieldset>
                        <section>
                            <label class="input">
                                <input type="text" placeholder="Operating Hours" id="operating_hrs" name="operating_hrs">
                            </label>
					    </section>
				</fieldset>
                           
                <fieldset>
					<div class="row">
						<section class="col col-4">
							<label class="select">
								<select name="country">
									<option value="0" selected disabled>Country</option>
									<option value="244">Aaland Islands</option>
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">Belarus</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="245">Bonaire, Sint Eustatius and Saba</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Bouvet Island</option>
									<option value="30">Brazil</option>
									<option value="31">British Indian Ocean Territory</option>
									<option value="32">Brunei Darussalam</option>
									<option value="33">Bulgaria</option>
									<option value="34">Burkina Faso</option>
									<option value="35">Burundi</option>
									<option value="36">Cambodia</option>
									<option value="37">Cameroon</option>
									<option value="38">Canada</option>
									<option value="251">Canary Islands</option>
									<option value="39">Cape Verde</option>
									<option value="40">Cayman Islands</option>
									<option value="41">Central African Republic</option>
									<option value="42">Chad</option>
									<option value="43">Chile</option>
									<option value="44">China</option>
									<option value="45">Christmas Island</option>
									<option value="46">Cocos (Keeling) Islands</option>
									<option value="47">Colombia</option>
									<option value="48">Comoros</option>
									<option value="49">Congo</option>
									<option value="50">Cook Islands</option>
									<option value="51">Costa Rica</option>
									<option value="52">Cote D'Ivoire</option>
									<option value="53">Croatia</option>
									<option value="54">Cuba</option>
									<option value="246">Curacao</option>
									<option value="55">Cyprus</option>
									<option value="56">Czech Republic</option>
									<option value="237">Democratic Republic of Congo</option>
									<option value="57">Denmark</option>
									<option value="58">Djibouti</option>
									<option value="59">Dominica</option>
									<option value="60">Dominican Republic</option>
									<option value="61">East Timor</option>
									<option value="62">Ecuador</option>
									<option value="63">Egypt</option>
									<option value="64">El Salvador</option>
									<option value="65">Equatorial Guinea</option>
									<option value="66">Eritrea</option>
									<option value="67">Estonia</option>
									<option value="68">Ethiopia</option>
									<option value="69">Falkland Islands (Malvinas)</option>
									<option value="70">Faroe Islands</option>
									<option value="71">Fiji</option>
									<option value="72">Finland</option>
									<option value="74">France, skypolitan</option>
									<option value="75">French Guiana</option>
									<option value="76">French Polynesia</option>
									<option value="77">French Southern Territories</option>
									<option value="126">FYROM</option>
									<option value="78">Gabon</option>
									<option value="79">Gambia</option>
									<option value="80">Georgia</option>
									<option value="81">Germany</option>
									<option value="82">Ghana</option>
									<option value="83">Gibraltar</option>
									<option value="84">Greece</option>
									<option value="85">Greenland</option>
									<option value="86">Grenada</option>
									<option value="87">Guadeloupe</option>
									<option value="88">Guam</option>
									<option value="89">Guatemala</option>
									<option value="241">Guernsey</option>
									<option value="90">Guinea</option>
									<option value="91">Guinea-Bissau</option>
									<option value="92">Guyana</option>
									<option value="93">Haiti</option>
									<option value="94">Heard and Mc Donald Islands</option>
									<option value="95">Honduras</option>
									<option value="96">Hong Kong</option>
									<option value="97">Hungary</option>
									<option value="98">Iceland</option>
									<option value="99">India</option>
									<option value="100">Indonesia</option>
									<option value="101">Iran (Islamic Republic of)</option>
									<option value="102">Iraq</option>
									<option value="103">Ireland</option>
									<option value="104">Israel</option>
									<option value="105">Italy</option>
									<option value="106">Jamaica</option>
									<option value="107">Japan</option>
									<option value="240">Jersey</option>
									<option value="108">Jordan</option>
									<option value="109">Kazakhstan</option>
									<option value="110">Kenya</option>
									<option value="111">Kiribati</option>
									<option value="113">Korea, Republic of</option>
									<option value="114">Kuwait</option>
									<option value="115">Kyrgyzstan</option>
									<option value="116">Lao People's Democratic Republic</option>
									<option value="117">Latvia</option>
									<option value="118">Lebanon</option>
									<option value="119">Lesotho</option>
									<option value="120">Liberia</option>
									<option value="121">Libyan Arab Jamahiriya</option>
									<option value="122">Liechtenstein</option>
									<option value="123">Lithuania</option>
									<option value="124">Luxembourg</option>
									<option value="125">Macau</option>
									<option value="127">Madagascar</option>
									<option value="128">Malawi</option>
									<option value="129">Malaysia</option>
									<option value="130">Maldives</option>
									<option value="131">Mali</option>
									<option value="132">Malta</option>
									<option value="133">Marshall Islands</option>
									<option value="134">Martinique</option>
									<option value="135">Mauritania</option>
									<option value="136">Mauritius</option>
									<option value="137">Mayotte</option>
									<option value="138">Mexico</option>
									<option value="139">Micronesia, Federated States of</option>
									<option value="140">Moldova, Republic of</option>
									<option value="141">Monaco</option>
									<option value="142">Mongolia</option>
									<option value="242">Montenegro</option>
									<option value="143">Montserrat</option>
									<option value="144">Morocco</option>
									<option value="145">Mozambique</option>
									<option value="146">Myanmar</option>
									<option value="147">Namibia</option>
									<option value="148">Nauru</option>
									<option value="149">Nepal</option>
									<option value="150">Netherlands</option>
									<option value="151">Netherlands Antilles</option>
									<option value="152">New Caledonia</option>
									<option value="153">New Zealand</option>
									<option value="154">Nicaragua</option>
									<option value="155">Niger</option>
									<option value="156">Nigeria</option>
									<option value="157">Niue</option>
									<option value="158">Norfolk Island</option>
									<option value="112">North Korea</option>
									<option value="159">Northern Mariana Islands</option>
									<option value="160">Norway</option>
									<option value="161">Oman</option>
									<option value="162">Pakistan</option>
									<option value="163">Palau</option>
									<option value="247">Palestinian Territory, Occupied</option>
									<option value="164">Panama</option>
									<option value="165">Papua New Guinea</option>
									<option value="166">Paraguay</option>
									<option value="167">Peru</option>
									<option value="168">Philippines</option>
									<option value="169">Pitcairn</option>
									<option value="170">Poland</option>
									<option value="171">Portugal</option>
									<option value="172">Puerto Rico</option>
									<option value="173">Qatar</option>
									<option value="174">Reunion</option>
									<option value="175">Romania</option>
									<option value="176">Russian Federation</option>
									<option value="177">Rwanda</option>
									<option value="178">Saint Kitts and Nevis</option>
									<option value="179">Saint Lucia</option>
									<option value="180">Saint Vincent and the Grenadines</option>
									<option value="181">Samoa</option>
									<option value="182">San Marino</option>
									<option value="183">Sao Tome and Principe</option>
									<option value="184">Saudi Arabia</option>
									<option value="185">Senegal</option>
									<option value="243">Serbia</option>
									<option value="186">Seychelles</option>
									<option value="187">Sierra Leone</option>
									<option value="188">Singapore</option>
									<option value="189">Slovak Republic</option>
									<option value="190">Slovenia</option>
									<option value="191">Solomon Islands</option>
									<option value="192">Somalia</option>
									<option value="193">South Africa</option>
									<option value="194">South Georgia &amp; South Sandwich Islands</option>
									<option value="248">South Sudan</option>
									<option value="195">Spain</option>
									<option value="196">Sri Lanka</option>
									<option value="249">St. Barthelemy</option>
									<option value="197">St. Helena</option>
									<option value="250">St. Martin (French part)</option>
									<option value="198">St. Pierre and Miquelon</option>
									<option value="199">Sudan</option>
									<option value="200">Suriname</option>
									<option value="201">Svalbard and Jan Mayen Islands</option>
									<option value="202">Swaziland</option>
									<option value="203">Sweden</option>
									<option value="204">Switzerland</option>
									<option value="205">Syrian Arab Republic</option>
									<option value="206">Taiwan</option>
									<option value="207">Tajikistan</option>
									<option value="208">Tanzania, United Republic of</option>
									<option value="209">Thailand</option>
									<option value="210">Togo</option>
									<option value="211">Tokelau</option>
									<option value="212">Tonga</option>
									<option value="213">Trinidad and Tobago</option>
									<option value="214">Tunisia</option>
									<option value="215">Turkey</option>
									<option value="216">Turkmenistan</option>
									<option value="217">Turks and Caicos Islands</option>
									<option value="218">Tuvalu</option>
									<option value="219">Uganda</option>
									<option value="220">Ukraine</option>
									<option value="221">United Arab Emirates</option>
									<option value="222">United Kingdom</option>
									<option value="223">United States</option>
									<option value="224">United States Minor Outlying Islands</option>
									<option value="225">Uruguay</option>
									<option value="226">Uzbekistan</option>
									<option value="227">Vanuatu</option>
									<option value="228">Vatican City State (Holy See)</option>
									<option value="229">Venezuela</option>
									<option value="230">Viet Nam</option>
									<option value="231">Virgin Islands (British)</option>
									<option value="232">Virgin Islands (U.S.)</option>
									<option value="233">Wallis and Futuna Islands</option>
									<option value="234">Western Sahara</option>
									<option value="235">Yemen</option>
									<option value="238">Zambia</option>
									<option value="239">Zimbabwe</option>
								<select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="City" id="city" name="city">
							</label>
						</section>
						
						<section class="col col-4">
							<label class="input">
								<input type="tel" placeholder="Pin code" id="pincode" name="pincode">
							</label>
						</section>
					</div>
					
					<section>
						<label for="file" class="input">
							<input type="tel" placeholder="Address" id="address" name="address">
						</label>
					</section>
					
					<section>
						<label class="label"></label>
						<label class="textarea">
							<i class="icon-append icon-comment"></i>
							<textarea rows="3" placeholder="Landmarks" id="landmark" name="landmark"></textarea>
						</label>
					</section>
				</fieldset>
                        
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
                    
                <fieldset>
                    <section>
                        <label class="toggle state-error"><input type="radio" name="radio-toggle" id="home_delivery"><i></i>Available for Home Delivery</label>
                    </section>
                </fieldset>
                        
				<footer>
					<button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
			</form>
		</div>
</div>
    
<div id="Admin" class="tabcontent bg-cyan">
  <div class="body body-s">
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="admin">
				<header align = "center">Add an Admin</header>
				
				<fieldset>
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" id="email" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" id="pwd" name="pwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password" id="cpwd" name="cpwd">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
                    
                    <section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Patient ID" id="patient_id" name="patient_id">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
				</fieldset>
                
                <fieldset>
                        <label class="label">Added On</label>
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
                </fieldset>
                    
                <fieldset>
                        <section>
						<label class="label">Photo</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
						</label>
						<div class="note note-error">File size must be less than 3Mb</div>
					</section>        
                </fieldset>
                <footer>
					<button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
            </form>
    </div>
</div>
    
<div id="Medicine" class="tabcontent bg-cyan">
        <div class="body body-s">
			<form action="" class="sky-form" method="post">
                <input type="hidden" name="type" value="medicine">
				<header align = "center">Add a Medicine</header>
				
				<fieldset>
					<section>
						<label class="input">
							<input type="text" placeholder="Name" id="name" name="name">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                    
                    <section>
						<label class="input">
							<input type="text" placeholder="Manufacturer" id="manufacturer" name="manufacturer">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                    
                    <section>
						<label class="input">
							<input type="text" placeholder="Price" id="price" name="price">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
                    
                    <section>
							<label class="select">
								<select name="category">
									<option value="0" selected disabled>Category</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
				    </section>
                </fieldset>
                        
                <fieldset>
                        <label class="label">Manufactured Since</label>
                    <section class="col col-4">
							<label class="select">
								<select name="date">
									<option value="0" selected disabled>Date</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="select">
								<select name="month">
									<option value="0" selected disabled>Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								<select>
								<i></i>
							</label>
						</section>
                                
                        <section class="col col-4">
							<label class="input">
								<input type="text" placeholder="Year" id="year" name="year">
							</label>
						</section>
                </fieldset>
             <footer>
					<button type="submit" class="button" id="submit" name="submit" onsubmit="insert_new.php">Submit</button>
				</footer>
            </form>
    </div>
</div>
    
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>


