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
   
        $statement = new Cassandra\SimpleStatement("DELETE from hospitalemployees where id=".$result4[0]['id']."");
        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get();

        header("Location: hospital_master.php");
?>