<?php 

$cluster = Cassandra::cluster()
               ->withContactPoints('192.168.43.194')
               ->withPort(9042)
               ->withCredentials("medicard", "medicard")
               ->build();
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);      
$f_name=($_POST['first_name']);
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
        //$photo=
        
        $statement = new Cassandra\SimpleStatement("INSERT INTO doctor_master VALUES ('".$f_name."','".$m_name."','".$l_name."','".$emailid."','".$password."','".$confirm_pwd."','".$gender."','".$phone."','".$e_contact."','".$date."','".$month."','".$year."','".$college."','".$degree."','".$degree_date."','".$degree_month."','".$degree_year."','".$aadhar_no."','".$passport_no."','".$blood_grp."','".$allergies."','".$country."','".$city."','".$pincode."','".$address."','".$landmark."')");

        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get();                      // wait for the result, with an optional timeout
        foreach ($result as $row) {
          //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
        }
        
        header("location: add_new_everything.php");
        
?>
