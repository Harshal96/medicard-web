 <?php
    session_start();
    $r_id=$_GET['r_id'];
    include 'connectivity.php';

    $keyspace = 'test';

    $session = $cluster->connect($keyspace);
    //$imagename=$_FILES["report_form"]["name"]; 
	//$imagetmp=file_get_contents($_FILES['report_form']['tmp_name']);
	//$content = bin2hex($imagetmp);
	$statement = new Cassandra\SimpleStatement('select * from reports where r_id='.$r_id.' ALLOW FILTERING');
	$future= $session->executeAsync($statement);
	echo ('select * from reports where r_id='.$r_id.' ALLOW FILTERING');
	
	$result = $future->get();

	foreach ($result as $row) 
	{
		echo ('<th>'.$row['description'] . '</th>' . '<th>' . '<a href="download_report.php?r_id='.$row['r_id'] . '">REPORT LINK</a></th>' .  '<th>' .  $row['time']  . '</th>');
											
	     //header("Content-length: ");
         header("Content-type: application/pdf");
         //header("Content-Disposition: attachment; filename=$file");
         echo $row['file'];
	 }
 ?>
