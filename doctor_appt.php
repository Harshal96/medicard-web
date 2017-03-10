<?php
    include 'connectivity.php';
    $keyspace = 'test';
    $session = $cluster->connect($keyspace);

session_start();
$date= $_POST['datepicker'];
$time=$_POST['timeSlot']; 
$pid=$_SESSION['userid'];
$did=$_GET['id'];
$statement = new Cassandra\SimpleStatement("SELECT * from appt_details where doc_id=".$did." and time='".$time."' ALLOW FILTERING");
$future = $session->executeAsync($statement);
$result    = $future->get();                      
foreach ($result as $row) {

$apid=$row['id'];
$slots_avail=$row['slots']-1;

if($slots_avail ==0)
    echo "<script type='text/javascript'>alert('No appointments available. Select a differnt time slot or date'); window.location = 'doctor_profile.php?id=$did';</script>";

else
{


$statement2 = new Cassandra\SimpleStatement("SELECT * from patient_master where email='".$pid."' ALLOW FILTERING");
$future2 = $session->executeAsync($statement2);
$result2    = $future2->get();
foreach ($result2 as $row2) {
    //nothing to see here
}


$statement = new Cassandra\SimpleStatement("INSERT INTO appointment_master(app_id,date,doctor_id,hnc_id,patient_id) VALUES (uuid(),'".$date."',".$did.",111,".$row2['patient_id'].");");

$future = $session->executeAsync($statement);

$statement = new Cassandra\SimpleStatement("UPDATE appt_details SET slots=".$slots_avail." where id=".$apid." ");
$future = $session->executeAsync($statement);
    echo "<script type='text/javascript'>alert('BOOKED!'); window.location = 'doctor_profile.php?id=$did';</script>";


}

}



?>