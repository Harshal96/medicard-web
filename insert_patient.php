<?php 

		include 'connectivity.php';
		$keyspace  = 'test';
		$session   = $cluster->connect($keyspace);
        
        $patient_id= ($_POST['patient_id']);
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
        $dob=$date.'/'.$month.'/'.$year;
        //$photo=
        
        $statement = new Cassandra\SimpleStatement("INSERT INTO patient_master(patient_id, Patient_Passsword, Fname, Lname, Mname, Gender, Mobile, Email, EmergencyContact, BloodGroup, AadharCard, PassportNumber, DOB, Allergies, HouseNumber, Society, Street, Locality, City, Pin, State, Country, OfficeName, OfficeContact, OHouseNumber, OSociety, OStreet, OLocality, oCity, OPin, Ostate, OCountry) VALUES (".$patient_id.",'".$password."','".$f_name."','".$l_name."','".$m_name."','".$gender."','".$phone."','".$emailid."','".$e_contact."','".$blood_grp."','".$aadhar_no."','".$passport_no."','".$dob."','".$allergies."','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','','','','','','','','','','')");

        /*$statement = new Cassandra\SimpleStatement("INSERT INTO patient_master(patient_id, Patient_Passsword, Fname, Lname, Mname, Gender, Mobile, Email, EmergencyContact, BloodGroup, AadharCard, PassportNumber, DOB, Allergies, HouseNumber, Society, Street, Locality, City, Pin, State, Country, OfficeName, OfficeContact, OHouseNumber, OSociety, OStreet, OLocality, oCity, OPin, Ostate, OCountry) VALUES (".$patient_id.",'".$password."','".$f_name."','".$l_name."','".$m_name."','".$gender."','".$phone."','".$emailid."','".$e_contact."','".$blood_grp."','".$aadhar_no."','".$passport_no."','".$dob."','".$allergies."','','','".$landmark."','".$address."','".$city."','".$pincode."','','".$country."','','','','','','','','','','')");*/
        
        $future    = $session->executeAsync($statement);
        
       /* header("location: add_new_everything.php");*/
        
?>
