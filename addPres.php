<html>
<?php
session_start();
$doctor_email_here = $_SESSION['userid'];
$patientemail = $_SESSION['searchpid'];
//$doctor_email_here="abc@abc.a";
//$patientemail="abc@abc.a";
//use Cassandra;
$cluster = Cassandra::cluster()
               ->withContactPoints('192.168.43.219')
               ->withPort(9042)
               ->withCredentials("ria", "medicard")
               ->build();
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);        
$statement = new Cassandra\SimpleStatement("SELECT * from patient_master where email='".$patientemail."' ALLOW FILTERING");
$future    = $session->executeAsync($statement);  // fully asynchronous and easy parallel execution
$result    = $future->get();                      // wait for the result, with an optional timeout
foreach ($result as $row) {
  //echo $row['patient_id'] . "   " . $row['fname'] . "   " . $row['gender'] . "<br>";
}
                    $statement4 = new Cassandra\SimpleStatement("SELECT doctor_id from doctor_master where email = '".$doctor_email_here."' ALLOW FILTERING");
                    //$doctor_id_here = '899';
                    $future4 = $session->executeAsync($statement4);  // fully asynchronous and easy parallel execution
                    $result4 = $future4->get();                      // wait for the result, with an optional timeout
                    foreach ($result4 as $row4) {
                        $doctor_id_here = $row4['doctor_id'];
                    }
    //if(isset($_POST['SaveBtn'])){
        //$name = 'MedicineName';
        $medPres="(";
        foreach($_POST as $k => $v) {

            $pos = strpos($k, "MedicineName");
            if($pos === 0){
                $medPres .=$v.",";
            } 

        }
          //$name = 'MedicineName';
        $medPres="(";
        foreach($_POST as $k => $v) {

            $pos = strpos($k, "MedicineName");
            if($pos === 0){
                $medPres .=$v.",";
            } 

        }
        $medPres.=$_POST['aORb'].")";
        $prescriptions_id=12348;
        $diseasesP=$_POST['detected_disease'];
        $dopP=date('d/m/y');
        echo $dopP;
        $fees_chargedP=$_POST['Fees'];
        $hnc_idP=12344;
        $doctor_idP = $row4['doctor_id'];
        $patient_idP = $row['patient_id'];
        $symptomsP = $_POST['symptoms_detected'];

        $addPresToDB = new Cassandra\SimpleStatement("INSERT INTO prescriptions (prescriptions_id, diseases, doctor_id, dop,hnc_id,medicines,patient_id,symptoms) VALUES (".$prescriptions_id.",'".$diseasesP."',".$doctor_idP.",'".$dopP."',".$hnc_idP.",'".$medPres."',".$patient_idP.",'".$symptomsP."')");
        $futurePresDB    = $session->executeAsync($addPresToDB); 
?>

