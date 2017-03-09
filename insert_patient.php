<?php 

		$cluster = Cassandra::cluster()
					   ->withContactPoints('192.168.43.194')
					   ->withPort(9042)
					   ->withCredentials("medicard", "medicard")
					   ->build();
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
        
        $f_name= ($_POST['first_name']);
        $m_name= ($_POST['middle_name']);
        $l_name= ($_POST['last_name']);
        $emailid= ($_POST['email']);
        $password= ($_POST['pwd']);
        $confirm_pwd= ($_POST['cpwd']);
        $gender= ($_POST['gender']);
        $phone= ($_POST['phone']);
        $e_contact= ($_POST['w=e_contact']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
        $aadhar_no= ($_POST['aadhar_no']);
        $passport_no= ($_POST['passport_no']);
        $blood_grp= ($_POST['blood_grp']);
        $allergies= ($_POST['allergies']);
        $country= ($_POST['country']);
        $city=($_POST['city']);
        $pincode= ($_POST['pincode']);
        $address= ($_POST['address']);
        $landmark= ($_POST['landmark']);
        //$photo=
        
        $statement = new Cassandra\SimpleStatement("INSERT INTO patient_master VALUES ('$f_name','$m_name','$l_name','$emailid','$password','$confirm_pwd','$gender','$phone','$e_contact','$date','$month','$year','$aadhar_no','$passport_no','$blood_grp','$allergies','$country','$city','$pincode','$address','$landmark','$photo')");
        
        /*$sql=mysqli_query("INSERT INTO patient_master VALUES ('$f_name','$m_name','$l_name','$emailid','$password','$confirm_pwd','$gender','$phone','$e_contact','$date','$month','$year','$aadhar_no','$passport_no','$blood_grp','$allergies','$country','$city','$pincode','$address','$landmark','$photo')");*/
        
        header("location: add_new_everything.html");
        
?>