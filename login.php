<?php

session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];
$_SESSION['userid'] = $username;

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

foreach ($result as $row) {
	header("Location: patient_master.php");
}
?>
