<!DOCTYPE html>
<html lang="en">

<?php
//use Cassandra;
$cluster = Cassandra::cluster()
               ->withContactPoints('192.168.43.219')
               ->withPort(9042)
               ->withCredentials("ria", "medicard")
               ->build();
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);
$id= $_GET['id'] ;      
$statement = new Cassandra\SimpleStatement("SELECT * from doctor_master where doctor_id=".$id.";");
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
  echo $row['doctor_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
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
            table.paging td {
            padding-left: 15px;
            padding-right: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 2px;
            color: black;
            width: 100%
            }
            table.paging td:hover {
            background-color: #e0e0e0;
            }
            ul.red {
            outline:10px solid #eee;
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
            /* Table CSS */
            .rwd-table {
            margin: 1em 0;
            min-width: 300px;
            }
            .rwd-table tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            }
            .rwd-table th {
            display: none;
            }
            .rwd-table td {
            display: block;
            }
            .rwd-table td:first-child {
            padding-top: .5em;
            }
            .rwd-table td:last-child {
            padding-bottom: .5em;
            }
            .rwd-table td:before {
            content: attr(data-th) ": ";
            font-weight: bold;
            width: 6.5em;
            display: inline-block;
            }
            @media (min-width: 480px) {
            .rwd-table td:before {
            display: none;
            }
            }
            .rwd-table th, .rwd-table td {
            text-align: left;
            }
            @media (min-width: 480px) {
            .rwd-table th, .rwd-table td {
            display: table-cell;
            padding: .25em .5em;
            }
            .rwd-table th:first-child, .rwd-table td:first-child {
            padding-left: 0;
            }
            .rwd-table th:last-child, .rwd-table td:last-child {
            padding-right: 0;
            }
            }
            .rwd-table {
            background: #eee ; 
            color: #eee;
            border-radius: .4em;
            overflow: hidden;
            border:none;
            border-collapse: collapse;
            }
            .rwd-table tr {
            border-color: #eeeeee;
            }
            .rwd-table tr:hover {
            background: #e0e0e0;
            }
            .rwd-table tr:hover:first-child {
            background: #eeeeee;
            }
            .rwd-table th, .rwd-table td {
            margin: .5em 1em;
            color: BLACK;
            }
            @media (min-width: 480px) {
            .rwd-table th, .rwd-table td {
            padding: 1em !important;
            }
            }
            .rwd-table th, .rwd-table td:before {
            color: BLACK;
            }
            .rwd-table td {
            border-left: 1px solid #000;
            border-right: 1px solid #000;
            }
            .rwd-table td:first-child {
            border-left: none;
            }
            .rwd-table td:last-child {
            border-right: none;
            }
            /* End Table CSS */
        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Doctor Profile</title>
        <!-- Bootstrap Core CSS -->
        <!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() { 
    $('#datepicker').datepicker({
         minDate: 0 

    });
  } );
  </script>
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
                            <a href="#services">Something cosulting</a>
                        </li>
                        <li>
                            <a href="#appointment">Appointment</a>
                        </li>
                        <li>
                            <a href="#contact">Reviews</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h1>About Section</h1>-->
                        <div class="content">
                            <div style="float:left; width:50%;">
                                <h3 class="m-a-0 m-b-xs"><b><?= $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></b></h3>
                                <br> <!-- Set Div As your requirement -->
                                <img src="images/a6.jpg" style="height:250px">
                                <br>
                                <hr>
                                <p><b>Email : </b><?= $row['email'] ?>/p>
                                <p><b>Contact : </b><?= $row['mobile'] ?></p>
                            </div>
                        </div>
                        <div class="content">
                            <div style="float:right; width:50%;">
                                <br>
                                <h4 class="m-a-0 m-b-xs" ><b>List of specialities:</b></h4>
                                <ul class="list-unstyled m-t-n-sm">
                                    <li class="checkbox">
                                        <label class="ui-check">Nature
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check"> Food and Drink
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check">Model Released
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check">Animals/Wildlife
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check">Abstract
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check"> Beauty/Fashion
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label class="ui-check">Business
                                        </label>
                                    </li>
                                </ul>
                                <!-- Set Div As your requirement -->
                                <!--<img src="images/a6.jpg" style="height:250px">-->
                                <br>
                                <hr>
                                <p><b>some stuff : </b>lalalalala</p>
                                <p><b>some stuff : </b>lalalalal oh my goddd!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Consults At</h1>
                        <div class="bgimg-2 w3-display-container" id = "prescriptions">
                            <div class="title">
                                <br><br><br>
                          <div>
                                <table class="rwd-table">
                                    <tr>
                                        <th>Hospital name</th>
                                        <th>Area</th>
                                        <th>Timings</th>
                                        <th>Basic fees Rs</th>
                                    </tr>

<?php

$statement2 = new Cassandra\SimpleStatement("SELECT * from hospitalemployees where doctor_id=".$id." ALLOW FILTERING;");
$future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
$result2    = $future2->get();                      // wait for the result, with an optional timeout
foreach ($result2 as $row2) {
  

$statement3 = new Cassandra\SimpleStatement("SELECT * from hospitalsandclinics where hnc_id=".$row2['hnc_id']." ALLOW FILTERING;");
$future3    = $session->executeAsync($statement3);  // fully asynchronous and easy parallel execution
$result3    = $future3->get();                      // wait for the result, with an optional timeout
foreach ($result3 as $row3) {

?>
                                    <tr>
                                        <td data-th="Sr."><?= $row3['name'] ?></td>
                                        <td data-th="Hospital"> <?= $row3['area'] ?></td>
                                        <td data-th="Area"> <?= $row2['dayandtime'] ?></td>
                                        <td data-th="Timing"><?= $row2['fees'] ?></td>
                                    </tr>
<?php
}}
?>
                                </table>
                                
                                </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment Section-->
        <section id="appointment" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Appointment</h1>
                        <div>
                        <table style="width: 100%; margin-top: 50px">
                            <tr >
                                <td rowspan="3" style="width: 30%;"><input type="text" id="datepicker" style="width: 100%;"></td> <td style="width: 70%"> Preferrable Time: </br><input type="radio" name="timeSlot" value="12p"> 12 PM </input> </td>
                            </tr>
                            <tr><td><input type="radio" name="timeSlot" value="2p"> 2 PM </input></td>
                            </tr>
                            <tr><td><input type="radio" name="timeSlot" value="2p"> 4 PM </input></td>
                            </tr>
                            <tr id="trSeperator"style="height: 10px">
                            </tr>
                            <tr>
                                <td colspan="2"> <button style="width: 100%"> Button </button></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Reviews!</h1>
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