<?php

session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];
$role= $_POST['role'];
$_SESSION['userid'] = $username;

$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.194')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();

$keyspace = 'test';

$session = $cluster->connect($keyspace);


if($role=='patient')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, patient_password from patient_master where email = '".$username."' and patient_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) {
	header("Location: patient_master.php");
}
}


if($role=='doc')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, doctor_password from doctor_master where email = '".$username."' and doctor_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();
echo $role;

foreach ($result as $row) {
	header("Location: doctor_master.php");
}
}


if($role=='diag')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, diagnostics_password from diagnostics_master where email = '".$username."' and diagnostics_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) {
	header("Location: diagnostics_master.php");
}
}


?>
