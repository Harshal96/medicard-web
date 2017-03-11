<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/patient.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <?php
        include 'connectivity.php';
        session_start();
        $hnc_email= $_SESSION['userid'];
        $doctor_id = $_GET['id'];
        $keyspace  = 'test';
        $session   = $cluster->connect($keyspace);
    
        $statement = new Cassandra\SimpleStatement("SELECT hnc_id from hospitalsandclinics where email='".$hnc_email."' ALLOW FILTERING");

        //echo "SELECT hnc_id from hospitalsandclinics where email='".$hnc_email."' ALLOW FILTERING";
        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get();                      // wait for the result, with an optional timeout
        foreach ($result as $row) {
           $statement4 = new Cassandra\SimpleStatement("SELECT * from hospitalemployees where hnc_id=".$row['hnc_id']." and doctor_id=".$doctor_id." ALLOW FILTERING");
                            $future4    = $session->executeAsync($statement4);  // fully asynchronous and easy parallel execution
                            $result4    = $future4->get();                      // wait for the result, with an optional timeout
                            foreach ($result4 as $row4) {
                            }         
            }
    ?>
    
<head>
<style type="text/css">
       .form-sec{
           margin-left: 35%;
           float: left;
           align-items: flex-start;
       }
</style>

</head>
<body>
<section id="update">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Update Doctor</h1>
                    <br><br>
           	    <div>
                    <section class="form-sec">
                        <form class="sky-form" method="post" action="">
                           <!-- <input type="hidden" name="type" value="doctor"> -->

                            <fieldset>
                                <section>
                                    <label >
                                        <!--<i class="icon-append icon-envelope-alt"></i>-->
                                        Day and Timings:&nbsp;<input type="text" placeholder="<?= $result4[0]['dayandtime'] ?>" id="daytime" name="daytime">
                                    </label>
                                </section>
                                <section>
                                    <label >
                                        <!--<i class="icon-append icon-envelope-alt"></i>-->
                                        Fees Charged:&nbsp;<input type="text" placeholder="<?= $result4[0]['fees'] ?>" id="fees" name="fees">
                                    </label>
                                </section>
                            </fieldset>
                            <footer class="footer">
                                <button type="submit" class="button" id="submit" name="submit">Submit</button>
                            </footer>
                        </form>
                    </section>
                    </div>
                </div>
            </div>
        </div>
</section>
    
<?php
    if(isset($_POST['submit'])){
        $daytime=($_POST['daytime']);
        $fees= ($_POST['fees']);
        $statement = new Cassandra\SimpleStatement("Update hospitalemployees SET dayandtime='".$daytime."', fees=".$fees." where id=".$result4[0]['id']."");
        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get(); 
        header("Location: hospital_master.php");
    }
    ?>
</body>
</html>

