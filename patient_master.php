<!DOCTYPE html>
<html lang="en">
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
		<link href='Pagination/styleforpagination.css' rel='stylesheet' type='text/css'>
        <script src="Pagination/jquery.min.js"></script>
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
	<script>
		$('tr').click(function() {
			p_div_show();
		});
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
                                <h3 class="m-a-0 m-b-xs"><b>Ria Maheshwari</b></h3>
                                <br> <!-- Set Div As your requirement -->
                                <img src="images/patienttry.jpg" style="height:250px">
                                <br>
                                <br><br> 
                                <p> <b>MediCard Patient ID </b>: 258147369 </p>
                                <br> <b>Phone</b> : 9769259947 
                            </div>
                        </div>
                        <div class="content">
                            <div style="float:right; width:50%;"><br>
                                <br> <b> Email: </b> lalllala@lalalala.com
                                <br><br> <b> DOB: </b> 25-07-1996
                                <br><br> <b> Sex: </b> Female <br><br>
                                <b> Address: </b> 201, Anand Dham-3 <br> Opp. Amboli Rly Crs. <br> Andheri East <br> Mumbai 400069 <br> Maharshtra, India
                                <br><br> <b> Blood Group: </b> B+ 
                                <br><br> <b> Emergency contact: </b> Mr. Blah Blahbla (father) 965142555 
                                <br><br> <b> Allergies : </b>
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
                        <h1>Prescriptions</h1>
                        <br>
                        <!--<ul id="p_list" class = "paging">
                            <li onclick="p_div_show()"> <b> <span>  Doctor's name - Lab </span> <span style="float: right"> Location Date</span> </b></li>
                            <li onclick="p_div_show()"> <span > Dr. Maheshwari - Amazing Diagnostics Center </span>  
                                <span style="float: right"> Andheri, Mumbai &nbsp 10-07-2016</span> 
                            </li>
                            <li onclick="p_div_show()"> <span > Dr. lalalalla </span>  <span style="float: right"> Bandra, Mumbai &nbsp 10-07-2016</span> </li>
                            <li> <span> Dr. blah blah </span>  <span style="float: right"> Versova, Mumbai &nbsp 10-07-2016</span> </li>
                            <li> <span> Dr. J.K.Money </span>  <span style="float: right">  Mumbai &nbsp 10-07-2016</span> </li>
                            <li> <span> Dr. Beshwar - Huge big hospital </span>  <span style="float: right"> xyzmnoplalala, Mumbai &nbsp 10-07-2016</span> </li>
                        </ul>-->
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
                                        <tr onclick="p_div_show()">
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
                        <!--<ul id="r_list" class = "paging reports">
                            <li onclick="r_div_show()"> <b> <span> Lab name - Location </span> <span style="float: right"> Date</span> </b> </li>
                            <li onclick="r_div_show()"> <span > Amazing Diagnostics Center - Andheri (East), Mumbai </span> <span style="float: right">10-07-2016</span> </li>
                            <li onclick="r_div_show()"> <span> Jnwndniwhd - feiuhfiuhf </span>  <span style="float: right"> 20-11-2016  </span> </li>
                            <li> <span> ifeortgjorege- blah blah </span>  <span style="float: right"> 10-09-2016 </span> </li>
                            <li> <span> fjwefonfofoerforeifoer- J.K.Money </span>  <span style="float: right"> 05-07-2016 </span> </li>
                            <li> <span> lalalallalalal- Beshwar </span>  <span style="float: right"> 04-17-2016 </span> </li>
                        </ul>-->
						<div class="post-wrapper">
                                <div class="loading-overlay">
                                    <div class="overlay-content">Loading.....</div>
                                </div>
                                <div id="posts_content">
                                    <?php
                                        
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
                                        <tr onclick="p_div_show()">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
					<form>
					  <input id="geocomplete" type="text" placeholder="Type in an address" size="40" />
					  <input list="browsers" name="browser">
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
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
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
			  .bind("geocode:result", function(event, result){
				$.log("Result: " + result.formatted_address);
			  })
			  .bind("geocode:error", function(event, status){
				$.log("ERROR: " + status);
			  })
			  .bind("geocode:multiple", function(event, results){
				$.log("Multiple: " + results.length + " results found");
			  });

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