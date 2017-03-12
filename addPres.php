
<?php
session_start();
$doctor_email_here = $_SESSION['userid'];
$patientemail = $_SESSION['searchpid'];

$patient_ID= $_SESSION['$p_id'];
//$patient_ID= 990;

$doc_id= $_SESSION['$doc_ID'];
//$doc_id= 990;


//$doctor_email_here="abc@abc.a";
//$patientemail="abc@abc.a";
//use Cassandra;
include 'connectivity.php';
$keyspace  = 'test';
$session   = $cluster->connect($keyspace);        

        $medPres="(";
        foreach($_POST as $k => $v) {
            $pos = strpos($k, "MedicineName");
            if($pos === 0){
                $medPres .=$v."-";
            } 
        }
        $medPres.=")(";

        foreach ($_POST as $key => $value) {
             $pos1 = strpos($key, "aORb");
            if($pos1 === 0){
                $medPres .=$value."-";
            } 
        }
        $medPres.=")";

        /*echo "$medPres";*/


        /*$medPres.=$_POST['aORb'].")";*/
        $diseasesP=$_POST['detected_disease'];
        $dopP=date('d/m/y');
        //echo $dopP;
        $fees_chargedP=$_POST['Fees'];
        

        $statement4 = new Cassandra\SimpleStatement("SELECT doctor_id from doctor_master where email = '".$doctor_email_here."' ALLOW FILTERING");
                    //$doctor_id_here = '899';
                    $future4 = $session->executeAsync($statement4);  // fully asynchronous and easy parallel execution
                    $result4 = $future4->get();                      // wait for the result, with an optional timeout
                    foreach ($result4 as $row4) {
                        $doctor_id_here = $row4['doctor_id'];
                        /*$_SESSION['$doc_ID'] = $doctor_id_here;*/
                    }


        $patient_idP = $patient_ID;
        $symptomsP = $_POST['symptoms_detected'];

        $addPresToDB = new Cassandra\SimpleStatement("INSERT INTO prescriptions (prescriptions_id, diseases, doctor_id, dop,medicines,patient_id,fees_charged,symptoms) VALUES (uuid(),'".$diseasesP."',".$doctor_id_here.",'".$dopP."','".$medPres."',".$patient_ID.",".$fees_chargedP.",'".$symptomsP."')");

        $futurePresDB    = $session->executeAsync($addPresToDB); 
         echo "hello";
         header("Location: patient_profile.php");
?>