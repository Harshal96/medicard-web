<!DOCTYPE html>
<html lang="en">
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
            background: #ff0000 ; 
            color: #fff;
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
                            <a href="#services">something cosulting</a>
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
                                <h3 class="m-a-0 m-b-xs"><b>Doctor Name</b></h3>
                                <br> <!-- Set Div As your requirement -->
                                <img src="images/a6.jpg" style="height:250px">
                                <br>
                                <hr>
                                <p><b>Email : </b>abc@yahoo.com</p>
                                <p><b>Contact : </b>9854621475</p>
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
                                <!--<span class="w3-xxlarge w3-text-black w3-wide">PRESCRIPTIONS</span>-->
                            </div>
                            <div class="post-wrapper">
                                <div class="loading-overlay">
                                    <div class="overlay-content">Loading.....</div>
                                </div>
                                <div id="posts_content">
                                    <?php
                                        //Include pagination class file
                                        include('Pagination/Pagination.php');
                                        
                                        //Include database configuration file
                                        include('Pagination/dbConfig.php');
                                        
                                        $limit = 5;
                                        
                                        //get number of rows
                                        $queryNum = $db->query("SELECT COUNT(*) as postNum FROM patient_master");
                                        $resultNum = $queryNum->fetch_assoc();
                                        $rowCount = $resultNum['postNum'];
                                        
                                        //initialize pagination class
                                        $pagConfig = array('baseURL'=>'Pagination/getData.php', 'totalRows'=>$rowCount, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
                                        $pagination =  new Pagination($pagConfig);
                                        
                                        //get rows
                                        $query = $db->query("SELECT * FROM patient_master ORDER BY patient_id DESC LIMIT $limit");
                                        
                                        if($query->num_rows > 0){ ?>
                                    <table class="rwd-table">
                                        <tr>
                                            <th>Movie Title</th>
                                            <th>Genre</th>
                                            <th>Year</th>
                                            <th>Gross</th>
                                        </tr>
                                        <?php
                                            while($row = $query->fetch_assoc()){ 
                                                $postID = $row['patient_id'];
                                            ?>
                                        <tr>
                                            <a href="javascript:void(0);">
                                                <h2><?php echo $row["Fname"]; ?></h2>
                                            </a>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                    <?php echo $pagination->createLinks(); ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <!--<div>
                                <table class="rwd-table">
                                    <tr>
                                        <th>Movie Title</th>
                                        <th>Genre</th>
                                        <th>Year</th>
                                        <th>Gross</th>
                                    </tr>
                                    <tr>
                                        <td data-th="Sr.">Star Wars</td>
                                        <td data-th="Hospital">Adventure, Sci-fi</td>
                                        <td data-th="Area">1977</td>
                                        <td data-th="Timing">$460,935,665</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Movie Title">Howard The Duck</td>
                                        <td data-th="Genre">"Comedy"</td>
                                        <td data-th="Year">1986</td>
                                        <td data-th="Gross">$16,295,774</td>
                                    </tr>
                                    <tr>
                                        <td data-th="Movie Title">American Graffiti</td>
                                        <td data-th="Genre">Comedy, Drama</td>
                                        <td data-th="Year">1973</td>
                                        <td data-th="Gross">$115,000,000</td>
                                    </tr>
                                </table>
                                
                                </div>   --> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="contact-section">
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