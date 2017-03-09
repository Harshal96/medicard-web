<?php 

		$cluster = Cassandra::cluster()
					   ->withContactPoints('192.168.43.194')
					   ->withPort(9042)
					   ->withCredentials("medicard", "medicard")
					   ->build();
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);

        $doctor_id=($_POST['doctor_id']);
        $diagnostic_id=($_POST['diagnostic_id']);
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
        $services= ($POST['services']);
        $country= ($_POST['country']);
        $city=($_POST['city']);
        $pincode= ($_POST['pincode']);
        $address= ($_POST['address']);
        $landmark= ($_POST['landmark']);
        //$photo=
        $doctor_name= ($_POST['d_name']);
        $workingsince=$date.'/'.$month.'/'.$year;
         
        $statement=new Cassandra\SimpleStatement("INSERT INTO diagnostics_master(diagnostics_id, Dname, Contact, Contact2, Contact3, Email, WorkingSince, ShopNumber, Society, Street, Locality, Area, City, pin, state, country, Services) values (".$diagnostic_id.",'".$name."','".$phone1."','".$phone2."','".$phone3."','".$emailid."','".$workingsince."','','','','".$address."','".$landmark."','".$city."','".$pincode."','','".$country."','".$services."','".$operating_hrs."')");

        /*$statement=new Cassandra\SimpleStatement("INSERT INTO diagnostics_master(diagnostics_id, diagnostics_Password, Dname, Contact, Contact2, Contact3, Email, WorkingSince, ShopNumber, Society, Street, Locality, Area, City, pin, state, country, Services, NoOfHours, doctor_id) VALUES ('".$diagnostic_id."','".$password."','".$name."','".$phone1."','".$phone2."','".$phone3."','".$emailid."','".$workingsince."','','','','".$address."','".$landmark."','".$city."','".$pincode."','','".$country."','".$services."','".$operating_hrs."','".$doctor_id."')");*/
        
        $future    = $session->executeAsync($statement);
        
        header("location: add_new_everything.php");

?>