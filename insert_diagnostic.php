<?php 

		$cluster = Cassandra::cluster()
					   ->withContactPoints('192.168.43.194')
					   ->withPort(9042)
					   ->withCredentials("medicard", "medicard")
					   ->build();
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);

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
        $photo=
        $doctor_name= ($_POST['d_name']);
            
        $sql=mysqli_query("INSERT INTO diaVALUES ('$name','$emailid','$password','$confirm_pwd','$phone1','$phone2','$phone3','$date','$month','$year','$operating_hrs','$services','$country','$city','$pincode','$address','$landmark','$photo','$doctor_name')");
        
        header("location: add_new_everything.html");

?>