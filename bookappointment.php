<?php
$date = $_POST['datepicker'];

$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.194')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();

$keyspace = 'test';

$session = $cluster->connect($keyspace);

$statement=new Cassandra\SimpleStatement("INSERT INTO appointment_master(app_id, doctor_id, patient_id, date) values (".$app_id.",'".$doctor_id."','".$patient_id."','".$date."')");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) { }
?>