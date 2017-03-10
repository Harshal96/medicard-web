<?php

session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];
$role= $_POST['role'];
$_SESSION['userid'] = $username;

include 'connectivity.php';

$keyspace = 'test';

$session = $cluster->connect($keyspace);

if($role=='')
{
	echo "<script type='text/javascript'>alert('Select a user'); window.location = 'home.html';</script>";

}

if($role=='patient')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, patient_password from patient_master where email = '".$username."' and patient_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) {
	header("Location: patient_master.php");
}
echo "<script type='text/javascript'>alert('Incorrect Login. Please try again'); window.location = 'home.html';</script>";
}


else if($role=='doc')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, doctor_password from doctor_master where email = '".$username."' and doctor_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();
echo $role;

foreach ($result as $row) {
	header("Location: doctor_master.php");
}
echo "<script type='text/javascript'>alert('Incorrect Login. Please try again'); window.location = 'home.html';</script>";
}


else if($role=='diag')
{
$statement = new Cassandra\SimpleStatement ("SELECT email, diagnostics_password from diagnostics_master where email = '".$username."' and diagnostics_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) {
	header("Location: diagnostics_master.php");
}
echo "<script type='text/javascript'>alert('Incorrect Login. Please try again'); window.location = 'home.html';</script>";
}

else if($role=='admin')
{

$statement = new Cassandra\SimpleStatement ("SELECT admin_id,admin_password from admin_master where admin_id = ".$username." and admin_password = '".$password."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();

foreach ($result as $row) {
	header("Location: add_new_everything.php");
}

echo "<script type='text/javascript'>alert('Incorrect Login. Please try again'); window.location = 'home.html';</script>";

}


?>
