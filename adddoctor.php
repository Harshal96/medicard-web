<?php

        session_start();
        $hnc_email= $_SESSION['userid'];
        include 'connectivity.php';
        $keyspace  = 'test';
        $session   = $cluster->connect($keyspace);        

        $email=($_POST['email']);
		$daytime=($_POST['daytime']);
        $fees= ($_POST['fees']);
        
        $statement = new Cassandra\SimpleStatement("SELECT hnc_id from hospitalsandclinics where email='".$hnc_email."' ALLOW FILTERING");

//echo "SELECT hnc_id from hospitalsandclinics where email='".$hnc_email."' ALLOW FILTERING";
        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get();                      // wait for the result, with an optional timeout
        foreach ($result as $row) {
          /*echo $row['chemist_id'] . "   " . $row['area'] . "    " . $row['city'] . "<br>";*/
        }

        $statement2 = new Cassandra\SimpleStatement("SELECT doctor_id from doctor_master where email='".$email."' ALLOW FILTERING;");

//echo "SELECT doctor_id from doctor_master where email='".$email."' ALLOW FILTERING;";
                        $future2    = $session->executeAsync($statement2);  // fully asynchronous and easy parallel execution
                        $result2    = $future2->get();                      // wait for the result, with an optional timeout
                        foreach ($result2 as $row2) {
                            
                        }


        $statement = new Cassandra\SimpleStatement("INSERT INTO hospitalemployees (id, dayandtime, doctor_id, fees, hnc_id) VALUES (uuid(),'".$daytime."',".$row2['doctor_id'].",".$fees.",".$row['hnc_id'].")");

        $future    = $session->executeAsync($statement);
        header("Location : hospital_master.php");

?>