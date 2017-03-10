<?php 

		include 'connectivity.php';
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
        
        $pharm_id=($_POST['pharm_id']);
        $name= ($_POST['name']);
        $emailid= ($_POST['email']);
        $password= ($_POST['pwd']);
        $confirm_pwd= ($_POST['cpwd']);
        $phone1= ($_POST['phone1']);
        $phone2= ($_POST['phone2']);
        $phone3= ($_POST['phone3']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
        $operating_hrs= ($_POST['operating_hrs']);
        $country= ($_POST['country']);
        $city=($_POST['city']);
        $pincode= ($_POST['pincode']);
        $address= ($_POST['address']);
        $landmark= ($_POST['landmark']);
        //$photo=
        $home_delivery= ($_POST['available']);
            
        $statement = new Cassandra\SimpleStatement("INSERT INTO chemist(chemist_id, shopname, shopnumber, Society, Street, Locality, Area, City, pin, state, country, contact, email, availableforhd, workinghours) VALUES (".$pharm_id.",'".$name."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$phone1."','".$emailid."',".$home_delivery.",".$operating_hrs.")");
		echo "INSERT INTO chemist(chemist_id, shopname, shopnumber, Society, Street, Locality, Area, City, pin, state, country, contact, email, availableforhd, workinghours) VALUES (".$pharm_id.",'".$name."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$phone1."','".$emailid."',".$home_delivery.",".$operating_hrs.")";

        //$statement = new Cassandra\SimpleStatement("INSERT INTO chemist(chemist_id, shopname, shopnumber, Society, Street, Locality, Area, City, pin, state, country, contact, email) VALUES (".$pharm_id.",'".$name."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$phone1."','".$emailid."')");
        
        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
      /*  $result    = $future->get();*/                    // wait for the result, with an optional timeout
       /* foreach ($result as $row) {
          //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
        }
        */
       //header("location: add_new_everything.php");
        
?>
