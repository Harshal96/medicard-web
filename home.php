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
$statement = new Cassandra\SimpleStatement('SELECT * from patient_master where patient_id=769;');
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
  //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
}
?>


<style>
/* Full-width input fields */
body{
    font-family: Georgia, serif;
}
input[type=text], input[type=password] {
    width: 61%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: white;
    color: white;
    padding: 14px 20px;
    margin: 9px 0;
    border: none;
    cursor: pointer;
    width: 67%;
    border-radius: 5px;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-size: 100% 100%;
    background: #ff1a1a; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left bottom, #ff6666 , #ff1a1a); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(top right,  #ff6666, #ff1a1a); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(top right, #ff6666 , #ff1a1a); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to top right,  #ff6666 , #ff1a1a); /* Standard syntax (must be last) */
}
    /* Extra styles for the cancel button */
.loginbtn {
    width: 20%;
    padding: 10px 18px;
    background-color:#32A2D2;
    color: #ffffff;
    border-radius: 5px;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #ffffff;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
/*Section Backgrounds*/
#about{
    background-size: 100% 100%;
    background: #0096D9; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left bottom, white , #0096D9); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(top right,  white , #0096D9); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(top right,  white , #0096D9); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to top right,  white , #0096D9); /* Standard syntax (must be last) */
}
#intro{
    background-size: 100% 100%;
    background: #0096D9; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left bottom, white , #0096D9); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(top right,  white , #0096D9); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(top right,  white , #0096D9); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to top right,  white , #0096D9); /* Standard syntax (must be last) */
}
#services{
    background-size: 100% 100%;
    background: #0096D9; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left bottom, white , #0096D9); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(top right,  white , #0096D9); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(top right,  white , #0096D9); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to top right,  white , #0096D9); /* Standard syntax (must be last) */
}
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Medicard</title>

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

  <!-- Modal -->
  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar1Blue.png" alt="Avatar" class="avatar">
    </div>

    <div class="container" style="width: 100%">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required style="width:100%">
<br/>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required style="width:100%">
<br/>
      <button type="submit" style="width: 100%" class="loginbtn"><b>Login</b></button> <br/>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1; width: 100%">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

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
                <a class="navbar-brand page-scroll" href="#page-top">Medicard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Contact</a>
                    </li>
                   <!-- <li>
                        <a href="#contact">Contact</a>
                    </li>-->
                    <li style="padding-left: 660px ">
                            

                        <!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-link">Log in</button>-->
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
                    <!--<h1>Medicard</h1>    
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>-->
                      <button type="button" onclick="document.getElementById('id01').style.display='block'"><b>Log in</b></button>
                     <!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-link">Log in</button>-->
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Medicard</h1>
                    <br>
                    <p>is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
   <!-- <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>-->

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

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>
