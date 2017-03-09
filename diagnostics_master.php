<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    $username = $_SESSION['userid'];
    
    include 'connectivity.php';

    $keyspace = 'test';

    $session = $cluster->connect($keyspace);

    $statement = new Cassandra\SimpleStatement ("SELECT * from diagnostics_master where email = '".$username."' ALLOW FILTERING");

    $future = $session->executeAsync($statement);

    $result = $future->get();

    foreach ($result as $row) {
        //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['lname'] . "   " . $row['gender'] . "<br>";
        
        
    }
    ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diagnostics Master</title>

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
<!--DragnDrop -->
<link href="fine-uploader/fine-uploader-new.css" rel="stylesheet">
    <script src="fine-uploader/fine-uploader.js"></script>
    <script type="text/template" id="qq-template-manual-trigger">
        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="buttons">
                <div class="qq-upload-button-selector qq-upload-button">
                    <div>Select files</div>
                </div>
                <button type="button" id="trigger-upload" class="btn btn-primary">
                    <i class="icon-upload icon-white"></i> Upload
                </button>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>ree
            </dialog>
        </div>
    </script>
<style>
        #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
        }

        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }

        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }

        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }
    </style>
<!-- End DragnDrop -->
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
                        <a href="#about">Patient Search</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
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
                            <h3 class="m-a-0 m-b-xs"><b><?= $row['dname'] ?></b></h3><br> <!-- Set Div As your requirement -->
                            <img src="images/patienttry.jpg" style="height:250px">
                            <br>
                            <br><br> <p> <b>MediCard Center ID </b>: <?= $row['diagnostics_id'] ?> </p> 
                                    
                            
                        </div>
                    </div>
                    
                    <div class="content">
                        <div style="float:right; width:50%;"><br>
                        <br> <b>Phone 1</b> : <?= $row['contact'] ?>
                        <br> <b>Phone 2</b> : <?= $row['contact2'] ?>
                        <br> <b>Phone 3</b> : <?= $row['contact3'] ?>
                        <br> <br> <b> Email: </b> <?= $row['email'] ?>
                <br><br> <b> Address: </b> <?= $row['shopnumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['city'].'-'.$row['pin'].'<br>'.$row['state'].' '. $row['country'] ?> 
                <br><br> <b> Working since: </b> <?= $row['workingsince'] ?>
                        <br> <br> <b> Operating Hours (starting 9 am): </b> <?= $row['noofhours'] ?>
                        <br> <br> <b> Services offered: </b> <?= $row['services'] ?>
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
                    <h1>Patient Search - Add report</h1><br>
                </div>
                <div  align="center">
                    <!--<input name="search_text" type="text" class="form-control" id="search_text" placeholder="Enter Patient MediCard ID" size="28" style="width: 50%" />  
                    -->
                    <div>  
                    <ul id = "p_list" class = "paging"> 
                        <div id="result"></div>
                    </ul>
                    </div>
                </div>
                <div>
				<!--	
                <div id="fine-uploader-manual-trigger"></div>

                <script>
                    var manualUploader = new qq.FineUploader({
                        element: document.getElementById('fine-uploader-manual-trigger'),
                        template: 'qq-template-manual-trigger',
                        request: {
                            endpoint: '/server/uploads'
                        },
                        thumbnails: {
                            placeholders: {
                                waitingPath: '/source/placeholders/waiting-generic.png',
                                notAvailablePath: '/source/placeholders/not_available-generic.png'
                            }
                        },
                        autoUpload: false,
                        debug: true
                    });

                    qq(document.getElementById("trigger-upload")).attach("click", function() {
                        manualUploader.uploadStoredFiles();
                    });
                </script>
                </div>
                -->
                <form method="POST" action="upload_report.php" enctype="multipart/form-data">
					<input type="file" name="report_form" id="report_form">
					<input type="submit" name="submit_image" value="Upload" id="submit_image">
					<input name="search_pid" type="text" class="form-control" id="search_pid" placeholder="Enter Patient MediCard ID" size="28" style="width: 50%" />  
                    <input name="d_id" type="hidden" value="<?= $row['diagnostics_id'] ?>" id="d_id">
				</form>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Tests</h1><br><br>
                        <div>
                <ul id="p_list" class = "paging">
                    <li> <span style="float: left; width:10%"><b> SR NO. </b></span> <span  style="float: left; width:30%"><b>Test Name</b></span> <span style="float: left; width:40%"><b>Cost</b></span><span style="float: left; width:20%"><b>Specifications</b></span></li>
                    <?php
                    $statement2 = new Cassandra\SimpleStatement("SELECT * from diagnostics_services where diagnostics_id=".$row['diagnostics_id']." ALLOW FILTERING;");
                    $future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
                    $result2    = $future2->get();  
                    foreach ($result2 as $row2 ) {
                    ?> 
                    <li> <span style="float: left; width:10%"> 1 </span> <span  style="float: left; width:30%"> <?= $row2['test'] ?></span> <span style="float: left; width:40%"><?= $row2['cost'] ?></span><span style="float: left; width:20%"><?= $row2['dept'] ?></span></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!--
    new version from CDN breaks tabs (looks cleaner tho)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.2/velocity.ui.min.js"></script>

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
