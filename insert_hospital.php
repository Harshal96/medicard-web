<?php 

		include 'connectivity.php';
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
        
        $hnc_id=($_POST['hnc_id']);
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
        $doe=$date.'/'.$month.'/'.$year;
        //$photo=
            
        $statement = new Cassandra\SimpleStatement("INSERT INTO hospitalsandclinics(hnc_id, hnc_Password, Name, contact1, contact2, contact3, Email, DOE, ShopNumber, Society, Street, Locality, Area, City, pin, state, country, Services) VALUES (".$hnc_id.",'".$password."','".$name."','".$phone1."','".$phone2."','".$phone3."','".$emailid."','".$doe."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$services."')"); 
        echo "INSERT INTO hospitalsandclinics(hnc_id, hnc_Password, Name, contact1, contact2, contact3, Email, DOE, ShopNumber, Society, Street, Locality, Area, City, pin, state, country, Services) VALUES (".$hnc_id.",'".$password."','".$name."','".$phone1."','".$phone2."','".$phone3."','".$emailid."','".$doe."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$services."')";
     //   $statement = new Cassandra\SimpleStatement("INSERT INTO hospitalsandclinics(hnc_id, Name, contact1, contact2, contact3, Email, DOE, ShopNumber, Society, Street, Locality, Area, City, pin, state, country, Services) VALUES (".$hnc_id.",'".$name."','".$phone1."','".$phone2."','".$phone3."','".$emailid."','".$doe."','','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','".$services."')"); 
        
              $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
       header("location: add_new_everything.php");
        
?>
