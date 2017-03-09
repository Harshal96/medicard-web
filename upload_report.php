 <?php
    session_start();
    $username = $_SESSION['userid'];
    $p_id = $_POST['search_pid'];
    $d_id = $_POST['d_id'];
    
    include 'connectivity.php';

    $keyspace = 'test';

    $session = $cluster->connect($keyspace);
    $imagename=$_FILES["report_form"]["name"]; 
	$imagetmp=file_get_contents($_FILES['report_form']['tmp_name']);
	$content = bin2hex($imagetmp);
	$statement = new Cassandra\SimpleStatement("insert into reports(r_id,d_id,p_id,file,time) VALUES (uuid(),".$d_id.",".$p_id.",asciiAsBlob('$content'),'".date("d-m-Y h:i:s")."')");
	$future= $session->executeAsync($statement);date("d-m-Y h:i:s");
	echo ("insert into reports(r_id,d_id,p_id,file,time) VALUES (uuid(),".$d_id.",".$p_id.",asciiAsBlob('$content'),'".date("d-m-Y h:i:s")."')");
 ?>


