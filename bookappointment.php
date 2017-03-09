<?php
$date = $_POST['datepicker'];

$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.194')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();

$keyspace = 'test';

$session = $cluster->connect($keyspace);

$statement = new Cassandra\SimpleStatement ("SELECT email, patient_password from patient_master where email = '".$username."' and patient_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) { }
?>