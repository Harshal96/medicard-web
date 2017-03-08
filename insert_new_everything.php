<?php 

$cluster = Cassandra::cluster()
               ->withContactPoints('192.168.43.219')
               ->withPort(9042)
               ->withCredentials("ria", "medicard")
               ->build();
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);        
/*$statement = new Cassandra\SimpleStatement('SELECT * from patient_master where patient_id=769;');
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
  //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
}*/
$type=$_POST['type'];

if($type=='doctor')
{
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
        $degree_photo=
        $aadhar_no= ($_POST['aadhar_no']);
        $passport_no= ($_POST['passport_no']);
        $blood_grp= ($_POST['blood_grp']);
        $allergies= ($_POST['allergies']);
        $country= ($_POST['country']);
        $city=($_POST['city']);
        $pincode= ($_POST['pincode']);
        $address= ($_POST['address']);
        $landmark= ($_POST['landmark']);
        $photo=
        
        $statement = new Cassandra\SimpleStatement("INSERT INTO doctor_master VALUES ('".$f_name."','".$m_name."','".$l_name."','".$emailid."','".$password."','".$confirm_pwd."','".$gender."','".$phone."','".$e_contact."','".$date."','".$month."','".$year."','".$college."','".$degree."','".$degree_date."','".$degree_month."','".$degree_year."','".$degree_photo."','".$aadhar_no."','".$passport_no."','".$blood_grp."','".$allergies."','".$country."','".$city."','".$pincode."','".$address."','".$landmark."','".$photo."')");

        $future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
        $result    = $future->get();                      // wait for the result, with an optional timeout
        foreach ($result as $row) {
          //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
        }
        
        header("location: add_new_everything.html");
}

if($type=='patient')
{
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
        $photo=
        
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$f_name','$m_name','$l_name','$emailid','$password','$confirm_pwd','$gender','$phone','$e_contact','$date','$month','$year','$aadhar_no','$passport_no','$blood_grp','$allergies','$country','$city','$pincode','$address','$landmark','$photo')");
        
        header("location: add_new_everything.html");
}

if($type=='diagnostic')
{
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
            
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$name','$emailid','$password','$confirm_pwd','$phone1','$phone2','$phone3','$date','$month','$year','$operating_hrs','$services','$country','$city','$pincode','$address','$landmark','$photo','$doctor_name')");
        
        header("location: add_new_everything.html");
}

if($type=='hospital')
{
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
            
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$name','$emailid','$password','$confirm_pwd','$phone1','$phone2','$phone3','$date','$month','$year','$operating_hrs','$services','$country','$city','$pincode','$address','$landmark','$photo')");
        
        header("location: add_new_everything.html");
}

if($type=='pharmacist')
{
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
        $photo=
        $home_delivery= ($_POST['home_delivery']);
            
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$name','$emailid','$password','$confirm_pwd','$phone1','$phone2','$phone3','$date','$month','$year','$operating_hrs','$country','$city','$pincode','$address','$landmark','$photo','$home_delivery')");
        
        header("location: add_new_everything.html");
}

if($type=='admin')
{
        $emailid= ($_POST['email']);
        $password= ($_POST['pwd']);
        $confirm_pwd= ($_POST['cpwd']);
        $patient_id= ($_POST['patient_id']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
        $photo=
            
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$emailid','$password','$confirm_pwd','$patient_id','$date','$month','$year','$photo')");
        
        header("location: add_new_everything.html");
}

if($type=='medicine')
{
        $name= ($_POST['name']);
        $manufacturer= ($_POST['manufacturer']);
        $price= ($_POST['price']);
        $category= ($_POST['category']);
        $date= ($_POST['date']);
        $month= ($_POST['month']);
        $year= ($_POST['year']);
            
        $sql=mysqli_query("INSERT INTO ******* VALUES ('$name','$manufacturer','$price','$category','$date','$month','$year')");
        
        header("location: add_new_everything.html");
}


?>