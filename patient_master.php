<!DOCTYPE html>
<html lang="en">
	
	<?php
	session_start();
	$username = $_SESSION['userid'];
	
	include 'connectivity.php';

	$keyspace = 'test';

	$session = $cluster->connect($keyspace);

	$statement = new Cassandra\SimpleStatement ("SELECT * from patient_master where email = '".$username."' ALLOW FILTERING");

	$future = $session->executeAsync($statement);

	$result = $future->get();

	foreach ($result as $row) {
		//echo $row['patient_id'] . "	" . $row['fname'] . "	" . $row['lname'] . "	" . $row['gender'] . "<br>";
	}
	?>
	
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Patient Dashboard</title>
        <!-- Bootstrap Core CSS -->
        <!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <link rel="stylesheet" href="css/patient.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->	
	<!--<link href='Pagination/styleforpagination.css' rel='stylesheet' type='text/css'>
        <script src="Pagination/jquery.min.js"></script>-->
    </head>
	
    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
    <script type="text/javascript">
        //Function To Display Popup
        function p_div_show() {
        document.getElementById('show_pres').style.display = "block";
        }
        //Function to Hide Popup
        window.onclick=function(event){
            if(event.target== document.getElementById('show_pres'))
                { 
                    document.getElementById('show_pres').style.display="none";
                } 
        if(event.target== document.getElementById('show_rep'))
                { 
                    document.getElementById('show_rep').style.display="none";
                } 
            }
        function p_div_hide(){
        document.getElementById('show_pres').style.display = "none";
        }
        
        function r_div_show() {
        document.getElementById('show_rep').style.display = "block";
        }
        //Function to Hide Popup
        function r_div_hide(){
        document.getElementById('show_rep').style.display = "none";
        }
    </script>
	
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">About</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top">About</a>
                        </li>
                        <li>
                            <a href="#about">Prescriptions</a>
                        </li>
                        <li>
                            <a href="#services">Reports</a>
                        </li>
                        <li>
                            <a href="#contact">Search</a>
                        </li>
                        <li>
                            <a href="#book">Appointments</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Intro Section -->
        <section id="intro" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h1>About Section</h1>-->
                        <div class="content">
                            <div style="float:left; width:50%;">
                                <h3 class="m-a-0 m-b-xs"><b><?= $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></b></h3>
                                <br> <!-- Set Div As your requirement -->
                                <img src="images/patienttry.jpg" style="height:250px">
                                <br>
                                <br><br> 
                                <p> <b>MediCard Patient ID </b>: <?= $row['patient_id'] ?> </p>
                                <br> <b>Phone</b> : <?= $row['mobile'] ?>
                            </div>
                        </div>
                        <div class="content">
                            <div style="float:right; width:50%;"><br>
                                <br> <b> Email: </b> <?= $row['mobile'] ?>
                                <br><br> <b> DOB: </b> <?= $row['dob'] ?>
                                <br><br> <b> Sex: </b> <?= $row['gender'] ?> <br><br>
                                <b> Address: </b> 201, Anand Dham-3 <br> <?= $row['housenumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['city'].'-'.$row['pin'].'<br>'.$row['state'].' '. $row['country'] ?> 
                                <br><br> <b> Blood Group: </b>  <?= $row['bloodgroup'] ?> 
                                <br><br> <b> Emergency contact: </b> <?= $row['emergencycontact'] ?>
                                <br><br> <b> Allergies : </b> <?= $row['allergies'] ?>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Prescriptions</h1><br>
			<?php
			$ppid = $row['patient_id'];

			$statement2 = new Cassandra\SimpleStatement("SELECT * from prescriptions where patient_id=".$ppid." ALLOW FILTERING");
			$future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
			$result2    = $future2->get();                      // wait for the result, with an optional timeout
			
			foreach ($result2 as $row2) {
				$docid = $row2['doctor_id']; 
				$statement3 = new Cassandra\SimpleStatement("SELECT fname, mname, lname from doctor_master where doctor_id = ".$docid." ALLOW FILTERING");
				$future3    = $session->executeAsync($statement3);  // fully asynchronous and easy parallel execution
				$result3    = $future3->get();                      // wait for the result, with an optional timeout

				foreach ($result3 as $row3) {
					//
				}
				
				  echo $row2['dop'] . "   " . $row2['symptoms'] . "   " . $row2['diseases']  . "   " . $row2['medicines'] . "   " . $row3['fname'] .  "   " . $row3['mname'] .  "   " . $row3['lname'] . "<br>";
			}
			?>
                    <!--<ul id="p_list" class = "paging">
                    <li> <b> <span>  Doctor's name - Lab </span> <span style="float: right"> Location Date</span> </b></li>
                    <li> <span > Dr. Maheshwari - Amazing Diagnostics Center </span>  
                                <span style="float: right"> Andheri, Mumbai &nbsp 10-07-2016</span> </li>
                    <li> <span > Dr. lalalalla </span>  <span style="float: right"> Bandra, Mumbai &nbsp 10-07-2016</span> </li>
                    <li> <span> Dr. blah blah </span>  <span style="float: right"> Versova, Mumbai &nbsp 10-07-2016</span> </li>
                    <li> <span> Dr. J.K.Money </span>  <span style="float: right">  Mumbai &nbsp 10-07-2016</span> </li>
                    <li> <span> Dr. Beshwar - Huge big hospital </span>  <span style="float: right"> xyzmnoplalala, Mumbai &nbsp 10-07-2016</span> </li>
                </ul>-->
                </div>
            </div>
        </div>
    </section>

     
        <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Reports</h1>
                        

                                    <table class="rwd-table">
                                        <tr>
                                            <th>Report description</th>
                                            <th>File</th>
                                            <th>Time</th>
                                        </tr>
                                        
                                        
                                    </table>

                                </div>
                            </div>
                    </div>
        </section>
        <!-- Search Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                <h1>Search</h1>
					<form action="searchDoctor.php" method="post">
					  <input id="geocomplete" name="geocomplete" type="text" placeholder="Type in an address" size="40" />
					  <input list="browsers" name="speciality" id="speciality">
					  <datalist id="browsers">
						<option value="Allergist ">
						<option value="Anesthesiologist">
						<option value="Cardiologist">
						<option value="Dermatologist">
						<option value="Gastroenterologist">
						<option value="Hematologist">
						<option value="Oncologist">
						<option value="Internal Medicine Physician">
						<option value="Nephrologist">
						<option value="Neurologist">
						<option value="Neurosurgeon">
						<option value="Obstetrician ">
						<option value="Gynaecologist">
						<option value="Nurse-Midwifery">
						<option value="Occupational Medicine Physician">
						<option value="Ophthalmologist">
						<option value="Oral and Maxillofacial Surgeon ">
						<option value="Orthopaedic Surgeon">
						<option value="Otolaryngologist ">
						<option value="Pathologist">
						<option value="Pediatrician">
						<option value="Plastic Surgeon">
						<option value="Podiatrist">
						<option value="Psychiatrist">
						<option value="Pulmonary Medicine Physician">
						<option value="Radiation Onconlogist">
						<option value="Diagnostic Radiologist">
						<option value="Rheumatologist ">
						<option value="Urologist">
						<option value="Diagnostics">
					  </datalist>
					  <input type="submit" value="Search">
					</form>
                </div>
            </div>
        </section>
        <section id="book" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>View all appointments</h1>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <!--
            new version from CDN breaks tabs (looks cleaner tho)
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
            -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKWCPFv8WEXRCb7V5Dnb6vjpoXL_8UZ-8&libraries=places"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.min.js"></script>
        <script	src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <!-- Bootstrap Core JavaScript - old version keeps tabs visible-->
        <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.geocomplete.min.js"></script>
        <!-- Scrolling Nav JavaScript -->
        <script>
            $(document).ready(function () {
               // bind click event to all internal page anchors
               $('a[href*="#"]').on('click', function (e) {
            
                   e.preventDefault();
                   e.stopPropagation();
            
                   var target = $(this).attr('href');
            
                   $(target).velocity('scroll', {
                       duration: 1500,
                       offset: 0,
                       easing: 'ease'
                   });
               });
            });
            $(window).scroll(function() {
               if ($(".navbar").offset().top > 50) {
                   $(".navbar-fixed-top").addClass("top-nav-collapse");
               } else {
                   $(".navbar-fixed-top").removeClass("top-nav-collapse");
               }
            });
        </script>
		
		<script>
		  $(function(){

			$("#geocomplete").geocomplete()

			$("#find").click(function(){
			  $("#geocomplete").trigger("geocode");
			});


			$("#examples a").click(function(){
			  $("#geocomplete").val($(this).text()).trigger("geocode");
			  return false;
			});

		  });
		</script>
		
        <div id="show_pres" >
        <center>
            <div id="popup">
                <div id="popup_content">
                    <button class="close" onclick ="p_div_hide()"> <span aria-hidden="true">&times</span></button>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
			</div>
        </center>
        </div>
        <div id="show_rep" >
        <center>
            <div id="popup">
                <div id="popup_content">
                    <button class="close" onclick ="r_div_hide()"> <span aria-hidden="true">&times</span></button>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </div>
			</div>
        </center>
        </div>

    </body>
</html>
