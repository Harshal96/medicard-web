<?php
$date = $_POST['datepicker'];

include 'connectivity.php';

$keyspace = 'test';

$session = $cluster->connect($keyspace);

$statement=new Cassandra\SimpleStatement("INSERT INTO appointment_master(app_id, doctor_id, patient_id, date) values (".$app_id.",'".$doctor_id."','".$patient_id."','".$date."')");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) { }
?>
