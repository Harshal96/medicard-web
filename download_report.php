 <?php
    session_start();
    $r_id=$_GET['r_id'];
    include 'connectivity.php';

    $keyspace = 'test';

    $session = $cluster->connect($keyspace);
    $statement = new Cassandra\SimpleStatement('select blobAsascii(file) as file, time from reports where r_id='.$r_id.' ALLOW FILTERING');
	$future= $session->executeAsync($statement);
	
	$result = $future->get();
    $f_content=base64_decode($result[0]['file']);
    
    header('Content-disposition: attachment; filename='.$result[0]['time'].'.pdf');
    header('content-type: application/octet-stream');
	
	echo ($f_content);
 ?>
