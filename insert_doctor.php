<?php 

		include 'connectivity.php';
		
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
		
		$doctor_id=($_POST['doctor_id']);
		$f_name=($_POST['first_name']);
        $m_name= ($_POST['middle_name']);
        $l_name= ($_POST['last_name']);
        $emailid= ($_POST['email']);
        $password= ($_POST['pwd']);
        $confirm_pwd= ($_POST['cpwd']);
        $gender= ($_POST['gender_d']);
        $phone= ($_POST['phone']);
        $e_contact= ($_POST['e_contact']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
        $college= ($_POST['college']);
        $degree= ($_POST['degree']);
        $degree_date= ($_POST['degree_date']);
        $degree_month= ($_POST['degree_month']);
        $degree_year= ($_POST['degree_year']);
        //$degree_photo=
        $aadhar_no= ($_POST['aadhar_no']);
        $passport_no= ($_POST['passport_no']);
        $blood_grp= ($_POST['blood_grp']);
        $allergies= ($_POST['allergies']);
        $country= ($_POST['country']);
        $city=($_POST['city']);
        $pincode= ($_POST['pincode']);
        $address= ($_POST['address']);
        $landmark= ($_POST['landmark']);
        $state= ($_POST['state']);
        $street= ($_POST['street']);
        //$photo=
        $dob=$date.'/'.$month.'/'.$year;
            
       /* $statement = new Cassandra\SimpleStatement("INSERT INTO doctor_master (doctor_id, aadharcard,allergies, area, bloodgroup,city,country,dob,doctor_password) VALUES (".$doctor_id.",'".$aadhar_no."','".$allergies."','".$address."','".$blood_grp."','".$city."','".$country."','".$dob."','".$password."')");*/
        
       $statement = new Cassandra\SimpleStatement("INSERT INTO doctor_master (doctor_id, aadharcard, allergies, area, bloodgroup,city,country,dob,doctor_password,email,emergencycontact,fname,gender,lname,locality,mname,mobile,passportnumber,pin,roomnumber,society,state,street) VALUES (".$doctor_id.",'".$aadhar_no."','".$allergies."','".$address."','".$blood_grp."','".$city."','".$country."','".$dob."','".$password."','".$emailid."','".$e_contact."','".$f_name."','".$gender."','".$l_name."','".$landmark."','".$m_name."','".$phone."','".$passport_no."','".$pincode."','".$degree_date."','".$college."','".$state."','".$street."')");

       $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
      /*  $result    = $future->get();*/                    // wait for the result, with an optional timeout
       /* foreach ($result as $row) {
          //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
        }
        */
       header("location: add_new_everything.php");
        
?>
