<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$doctor_email_here = $_SESSION['userid'];
$patientemail = $_SESSION['searchpid'];

//use Cassandra;
$cluster = Cassandra::cluster()
               ->withContactPoints('192.168.43.219')
               ->withPort(9042)
               ->withCredentials("ria", "medicard")
               ->build();
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);        
$statement = new Cassandra\SimpleStatement("SELECT * from patient_master where email='".$patientemail."' ALLOW FILTERING");
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
    $patient_ID = $row['patient_id'];
    $_SESSION['$p_id'] = $patient_ID;
  //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
}
                    $statement4 = new Cassandra\SimpleStatement("SELECT doctor_id from doctor_master where email = '".$doctor_email_here."' ALLOW FILTERING");
                    //$doctor_id_here = '899';
                    $future4 = $session->executeAsync($statement4);  // fully asynchronous and easy parallel execution
                    $result4 = $future4->get();                      // wait for the result, with an optional timeout
                    foreach ($result4 as $row4) {
                        $doctor_id_here = $row4['doctor_id'];
                        $_SESSION['$doc_ID'] = $doctor_id_here;
                    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Patient Profile</title>
    <!-- Bootstrap Core CSS -->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/patient.css">
	<link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

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
                        <a href="#writeAPrescription">Write a Prescription</a>
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
                            <h3 class="m-a-0 m-b-xs"><b><?= $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></b></h3><br> <!-- Set Div As your requirement -->
                            <img src="images/patienttry.jpg" style="height:250px">
                            <br>
                            <br><br> <p> <b>MediCard Patient ID </b><?= $row['patient_id'] ?> </p> 
                            <br> <b>Phone</b> : <?= $row['mobile'] ?>
            
                            
                        </div>
                    </div>
                    
                    <div class="content">
                        <div style="float:right; width:50%;"><br>
                            <br> <b> Email: </b> <?= $row['email'] ?>
                <br><br> <b> DOB: </b> <?= $row['dob'] ?>
                <br><br> <b> Sex: </b> <?= $row['gender'] ?> <br><br>
                             <b> Address: </b> <?= $row['housenumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['city'].'-'.$row['pin'].'<br>'.$row['state'].' '. $row['country'] ?> 
                <br><br> <b> Blood Group: </b> <?= $row['bloodgroup'] ?> 
                <br><br> <b> Emergency contact: </b> <?= $row['emergencycontact'] ?> 
                <br><br> <b> Allergies :</b> <?= $row['allergies'] ?>
                            <br>
                            
                        </div>
                    </div>
                    
                    </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
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
				echo $docid;
				$statement3 = new Cassandra\SimpleStatement("SELECT fname, mname, lname from doctor_master where doctor_id = ".$docid." ALLOW FILTERING");
				$future3    = $session->executeAsync($statement3);  // fully asynchronous and easy parallel execution
				$result3    = $future3->get();                      // wait for the result, with an optional timeout

				foreach ($result3 as $row3) { }

				
				  echo $row2['dop'] . "   " . $row2['symptoms'] . "   " . $row2['diseases']  . "   " . $row2['medicines'] . "   " . $result3[0]['fname'] .  "   " . $result3[0]['mname'] .  "   " . $result3[0]['lname'] . "<br>";
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
		<?php

			$statement2 = new Cassandra\SimpleStatement("SELECT * from prescriptions where patient_id=".$ppid." ALLOW FILTERING");
			$future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
			$result2    = $future2->get();                      // wait for the result, with an optional timeout
			
			foreach ($result2 as $row2) {
				$docid = $row2['doctor_id']; 

				$statement3 = new Cassandra\SimpleStatement("SELECT fname, mname, lname from doctor_master where doctor_id = ".$docid." ALLOW FILTERING");
				$future3    = $session->executeAsync($statement3);  // fully asynchronous and easy parallel execution
				$result3    = $future3->get();                      // wait for the result, with an optional timeout

				foreach ($result3 as $row3) {
				//echo $result3[0]['fname'] .  "   " . $result3[0]['mname'] .  "   " . $result3[0]['lname'] . "<br>";
				 }
				
				  echo $row2['dop'] . "   " . $row2['symptoms'] . "   " . $row2['diseases']  . "   " . $row2['medicines'] . "   " . $result3[0]['fname'] .  "   " . $result3[0]['mname'] .  "   " . $result3[0]['lname'] . "<br>";
			}
			?>

                <!--<ul id="r_list" class = "paging reports">
                    <li> <b> <span> Lab name - Location </span> <span style="float: right"> Date</span> </b> </li>
                    <li> <span > Amazing Diagnostics Center - Andheri (East), Mumbai </span> <span style="float: right">10-07-2016</span> </li>
                    <li> <span> Jnwndniwhd - feiuhfiuhf </span>  <span style="float: right"> 20-11-2016  </span> </li>
                    <li> <span> ifeortgjorege- blah blah </span>  <span style="float: right"> 10-09-2016 </span> </li>
                    <li> <span> fjwefonfofoerforeifoer- J.K.Money </span>  <span style="float: right"> 05-07-2016 </span> </li>
                    <li> <span> lalalallalalal- Beshwar </span>  <span style="float: right"> 04-17-2016 </span> </li>
                </ul>-->


                </div>
            </div>
        </div>
    </section>

    <section id="writeAPrescription" class="about-section">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Write a Prescription</h1><br>
		    <form action="addPres.php" method="post">
			<input type="label" id="doctor-id" value="Doctor ID: <?= $doctor_id_here ?>" disabled> 
			<input type="label" id="patient-id" value="Patient ID: <?= $patient_ID ?>" disabled>
            <input name="symptoms_detected" type="text" class="form-control" id="symptoms_detected" placeholder="Symptoms" size="28" style="width: 50%" />  
			<input name="detected_disease" type="text" class="form-control" id="detected_disease" placeholder="Detected Disease" size="28" style="width: 50%" />
			<button onclick="addMed(); return false;" class="form-control"  style="width: 50%;background-color: #99dfff">Add Medicine Prescription</button>
            <!--<input name="Medicines" type="text" class="form-control" id="Medicines" placeholder="Medicines" size="28" style="width: 50%" />-->
            <div id ="MedIncr"></div>
            <script type="text/javascript">
                var med=1;
                write=document.getElementById('MedIncr');
                function addMed()
                {
                write.insertAdjacentHTML('beforeend',"<span id=\"Medicine" + med + "\"><input type=\"text\"  placeholder=\"Medicine Serial " + med + "\" class=\"form-control\" style=\"width: 50%;display:inline\" name=\"MedicineName" + med + "\">&nbsp<input type=\"radio\" name=\"aORb\" value=\"after\" style=\"display:inline\">After</input> <input type=\"radio\" name=\"aORb\" value=\"before\"style=\"display:inline\">Before</input>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=\"checkbox\" name=\"MedicineName" + med + "01\" value=\"breakfast\"style=\"display:inline;\">Breakfast</input>&nbsp<input type=\"checkbox\" name=\"MedicineName" + med + "02\" value=\"lunch\"style=\"display:inline\">Lunch</input>&nbsp<input type=\"checkbox\" name=\"MedicineName" + med + "03\" value=\"dinner\"style=\"display:inline\">Dinner</input><button onclick=\"removeMed(this.parentNode.id);\" style=\"display:inline;background-color: #ff6666\">X</button></span>");
                    med=med + 1;
                }
                function removeMed(idSent){
                    var elem = document.getElementById(idSent);
                    elem.parentNode.removeChild(elem);
                    return false;
                }
            </script>
			<input name="Fees" type="text" class="form-control" id="Fees" placeholder="Fees Charged" size="28" style="width: 50%" />Fees charged
			<Button type="submit" value="Save" name="saveBtn" >Save</Button>
		    </form>
                </div>
            </div>
        </div>
    </section>

	<!--
	new version from CDN breaks tabs (looks cleaner tho)
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.min.js"></script>
    <script	src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <!-- Bootstrap Core JavaScript - old version keeps tabs visible-->
    <script src="js/bootstrap.min.js"></script>
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
</body>

</html>