
<?php
session_start();
$doctor_email_here = $_SESSION['userid'];
$patientemail = $_SESSION['searchpid'];
$patient_ID= $_SESSION['$p_id'];
$doc_id= $_SESSION['$doc_ID'];
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
        $diseasesP=$_POST['detected_disease'];
        $dopP=date('d/m/y');
        /*echo $dopP;*/
        $fees_chargedP=$_POST['Fees'];
        /*$doctor_idP = $row4['doctor_id'];
        $patient_idP = $row['patient_id'];*/
        $symptomsP = $_POST['symptoms_detected'];

        $addPresToDB = new Cassandra\SimpleStatement("INSERT INTO prescriptions (prescriptions_id, diseases, doctor_id, dop,medicines,patient_id,fees_charged,symptoms) VALUES (uuid(),'".$diseasesP."',".$doc_id.",'".$dopP."','".$medPres."',".$patient_ID.",".$fees_chargedP.",'".$symptomsP."')");

        $futurePresDB    = $session->executeAsync($addPresToDB); 
        header("Location : patient_profile.php");
?>