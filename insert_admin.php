<?php 

		$cluster = Cassandra::cluster()
					   ->withContactPoints('192.168.43.194')
					   ->withPort(9042)
					   ->withCredentials("medicard", "medicard")
					   ->build();
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
		
		$admin_id=($_POST['admin_id']);
        $emailid= ($_POST['email']);
        $password= ($_POST['pwd']);
        $confirm_pwd= ($_POST['cpwd']);
        $patient_id= ($_POST['patient_id']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
        //$photo=
            
       /* $statement = new Cassandra\SimpleStatement("INSERT INTO admin_master(admin_id, admin_password, patient_id) VALUES ('".$admin_id."','".$password."','".$patient_id."')");
        */

        $statement = new Cassandra\SimpleStatement("INSERT INTO admin_master(admin_id, admin_password, patient_id) VALUES (".$admin_id.",'".$password."',".$patient_id.")");

        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
      /*  $result    = $future->get();*/                    // wait for the result, with an optional timeout
       /* foreach ($result as $row) {
          //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
        }
        */
       header("location: add_new_everything.php");
        
?>
