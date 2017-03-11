<!DOCTYPE html>
<html lang="en">
<?php
//use Cassandra;
include 'connectivity.php';
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);  
$id= $_GET['id'] ;      
$statement = new Cassandra\SimpleStatement("SELECT * from hospitalsandclinics where hnc_id=".$id.";");
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
  //echo $row['chemist_id'] . "   " . $row['area'] . "    " . $row['city'] . "<br>";
}

?>
<head>
	<link href='Pagination/styleforpagination.css' rel='stylesheet' type='text/css'>
	<script src="Pagination/jquery.min.js"></script>
	<script type="text/javascript">
	// Show loading overlay when ajax request starts
	$( document ).ajaxStart(function() {
		$('.loading-overlay').show();
	});
	// Hide loading overlay when ajax request completes
	$( document ).ajaxStop(function() {
		$('.loading-overlay').hide();
	});
	</script>
	
   <style type="text/css">

            ul.paging2 li  {
                padding-left: 15px;
                padding-right: 15px;
                padding: 10px;
                background-color: #f9f9f9;
                border-radius: 2px;
                color: black;
                width: 100%;
            } 
            
            ul.paging2 li:hover {
                background-color: #e0e0e0;
            }

            ul.red {
                outline:10px solid red;
            }

            ul.simplePagerNav li{
                display: inline-block;
                float: left;
                padding: 10px;
            }

            ul.simplePagerNav li a{
                color: BLACK;
                text-decoration: none;
            }

            li.currentPage {
                background: WHITE;	
            }

            ul.simplePagerNav li.currentPage a {
                color: BLACK;
            }      
        </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hospital Profile</title>

    <!-- Bootstrap Core CSS -->
<!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/patient.css">

    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#about">Search Blood Bank</a>
                    </li>
                    <!--<li>
                        <a href="#services">List of Doctors</a>
                    </li>
                    <li>
                        <a href="#contact">Reviews</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row"> <!-- <h1>About Section</h1>-->
                   <div class="content">
                        <div style="float:left; width:50%;">
                            <h2 class="m-a-0 m-b-xs"><b><?= $row['name'] ?></b></h2><br> <!-- Set Div As your requirement -->
                            <img src="images/c9.jpg" style="height:300px">
                        </div>
                    </div>
                <div class="content">
                        <div style="float:right; width:50%;">
                            <h3 class="m-a-0 m-b-xs"><b>Details:</b></h3><br>
                             <p><b>Email : </b><?= $row['email'] ?></p>
                            <p><b>Contact1 : </b><?= $row['contact1'] ?></p>
                            <p><b>Contact2 : </b><?= $row['contact2'] ?></p>
                            <p><b>Contact3 : </b><?= $row['contact3'] ?></p>
                             
                            <!-- Set Div As your requirement -->
                            <!--<img src="images/a6.jpg" style="height:250px">-->
                            <br>
                         <h3 class="m-a-0 m-b-xs"><b>Address:</b></h3>
                            <p><?= $row['shopnumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['area'].'<br> '.$row['city'].'-'.$row['pin'].'<br>'.$row['state'].' '. $row['country'] ?> </p>
                            
                            
                            
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Search Blood Bank</h1><br>
                    <!--<ul id="p_list" class = "paging">
                    <li> <b> <span> Service </span> <span style="float: right"> Department</span> </b></li>
                    <li> <span > Cardiology </span>  
                                <span style="float: right"> 4th Floor - left wing</span> </li>
                    <li> <span>Neurology </span>  <span style="float: right"> 5th floor</span> </li>
                    <li> <span> Pathology </span>  <span style="float: right"> 6th floor</span> </li>
                    <li> <span> Orthology </span>  <span style="float: right">  B wing</span> </li>
                    <li> <span> Somelogy </span>  <span style="float: right"> xy4th Floor - B wing</span> </li>
                </ul>-->
                    <form method="POST" action="upload_report.php" enctype="multipart/form-data">
					<input type="file" name="report_form" id="report_form">
					<input type="submit" name="submit_image" value="Upload" id="submit_image">
					<input name="search_pid" type="text" class="form-control" id="search_pid" placeholder="Enter Patient MediCard ID" size="28" style="width: 50%" />  
                    <input name="d_id" type="hidden" value="<?= $row['diagnostics_id'] ?>" id="d_id">
                    <input name="desc_report" type="textarea" id="desc_report">
				    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Doctor Section -->
    <!--<section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>List of Doctors</h1>
                    <br><br>
           	    <div>
                   <ul id="" class = "paging2">
                    <li> <span style="float: left; width:10%"><b> SR NO. </b></span> <span  style="float: left; width:30%"><b>Doctor's Name</b></span> <span style="float: left; width:40%"><b>Timings</b></span><span style="float: left; width:20%"><b>Base fee Rs.</b></span></li>
                   
<?php

$statement2 = new Cassandra\SimpleStatement("SELECT * from hospitalemployees where hnc_id=".$id." ALLOW FILTERING;");
$future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
$result2    = $future2->get();                      // wait for the result, with an optional timeout
foreach ($result2 as $row2) {
  

$statement3 = new Cassandra\SimpleStatement("SELECT * from doctor_master where doctor_id=".$row2['doctor_id']." ALLOW FILTERING;");
$future3    = $session->executeAsync($statement3);  // fully asynchronous and easy parallel execution
$result3    = $future3->get();                      // wait for the result, with an optional timeout
foreach ($result3 as $row3) {

?>
                    <li> <span style="float: left; width:10%"> 1 </span> <span  style="float: left; width:30%"> <?= $row3['fname'].' '.$row3['mname'].' '.$row3['lname'] ?></span> <span style="float: left; width:40%"><?= $row2['dayandtime'] ?></span><span style="float: left; width:20%"> <?= $row2['fees'] ?></span></li>


<?php
}}
?>                 
                    </ul>
                 </div>
            </div>
            </div>
        </div>
    </section>
-->
    <!-- Review Section -->
    <!--<section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reviews</h1>
                </div>
            </div>
        </div>
    </section>
-->
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
