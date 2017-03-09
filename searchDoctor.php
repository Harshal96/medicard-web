<?php

$locality = $_POST['geocomplete'];
$speciality = $_POST['speciality'];

$cluster = Cassandra::cluster()
		->withContactPoints('192.168.43.194')
		->withPort(9042)
		->withCredentials("medicard", "medicard")
		->build();

$keyspace = 'test';

$session = $cluster->connect($keyspace);

$statement = new Cassandra\SimpleStatement ("SELECT * from hospitalsandclinics where locality = '".$locality."' ALLOW FILTERING");
$statement2 = new Cassandra\SimpleStatement ("SELECT * from doctor_master where speciality = '".$speciality."' ALLOW FILTERING");

$future = $session->executeAsync($statement);
$result = $future->get();

$future2 = $session->executeAsync($statement2);
$result2 = $future2->get();

foreach ($result as $row) { 
    $hnc_id = $row['hnc_id'];
    foreach ($result2 as $row2) { 
        $doc_id = $row2['doctor_id'];
        $statement3 = new Cassandra\SimpleStatement ("SELECT * from hospitalemployees where doctor_id = ".$doc_id." and hnc_id = ".$hnc_id." ALLOW FILTERING");
        $future3 = $session->executeAsync($statement3);
        $result3 = $future3->get();
        
        foreach ($result3 as $row3) {
            echo $row2['fname'];
        }

    }
}
?>