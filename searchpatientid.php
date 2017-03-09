<?php

session_start();

$pemail = $_POST['search_patient_id'];

$_SESSION['searchpid'] = $pemail;

$cluster = Cassandra::cluster()
      ->withContactPoints('192.168.43.194')
      ->withPort(9042)
      ->withCredentials("medicard", "medicard")
      ->build();

  $keyspace = 'test';

  $session = $cluster->connect($keyspace);

  $statement = new Cassandra\SimpleStatement ("SELECT email from patient_master where email = '".$pemail."' ALLOW FILTERING");

  $future = $session->executeAsync($statement);

  $result = $future->get();

  foreach ($result as $row) {
    header('Location: patient_profile.php');
    //echo $row['patient_id'] . " " . $row['fname'] . " " . $row['lname'] . " " . $row['gender'] . "<br>";
  }

?>
