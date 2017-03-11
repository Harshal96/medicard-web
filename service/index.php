<?php
session_start();
require 'vendor/autoload.php';

$settings =  [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new Slim\App($settings);

//$app = new Slim\Slim();

$app->group('/api', function () use ($app) {
	
	$app->get('/login', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	$allGetVars = $request->getQueryParams();
	
	if(!(array_key_exists('email',$allGetVars) && array_key_exists('password',$allGetVars)))
	{
		return $response->withJson([
		'message'=>'missing credentials'
		]);
	}
	
	$email = $allGetVars['email'];
	$password = $allGetVars['password'];
	
	$keyspace = 'test';

	$session = $cluster->connect($keyspace);
	$statement = new Cassandra\SimpleStatement ("SELECT email, patient_password from patient_master where email = '".$email."' and patient_password = '".$password."' ALLOW FILTERING");

	$future = $session->executeAsync($statement);

	$result = $future->get();

	foreach ($result as $row) {
		$_SESSION["loggedInAs"]="patient";
		return $response->withJson([
		'message'=>'patient login successful'
		]);
	}
	
	$statement = new Cassandra\SimpleStatement ("SELECT email, doctor_password from doctor_master where email = '".$username."' and doctor_password = '".$password."' ALLOW FILTERING");

	$future = $session->executeAsync($statement);

	$result = $future->get();

	foreach ($result as $row) {
		$_SESSION["loggedInAs"]="doctor";
		return $response->withJson([
		'message'=>'doctor login successful'
		]);
	}
	
	    return $response->withJson([
		'message'=>'invalid credentials'
		]);
    });
    
    
    $app->get('/test', function ($request, $response, $args) use ($app) {
	$allGetVars = $request->getQueryParams();
        return $response->withJson([
			'request sent' => $allGetVars
        ]);
    });
    
    $app->get('/patient/basic', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=="patient"))
	{
		return $response->withJson([
		'message'=>$_SESSION["loggedInAs"]
		]);
	}
	$allGetVars = $request->getQueryParams();
	$patient_email = $allGetVars['email'];
	
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);
	$statement = new Cassandra\SimpleStatement ("SELECT * from patient_master where email = '".$patient_email."' ALLOW FILTERING");
	$future = $session->executeAsync($statement);
	$result = $future->get();
	
	$fname=$result[0]['fname'];
	$mname=$result[0]['mname'];
	$lname=$result[0]['lname'];
	$dob=$result[0]['dob'];
	$gender=$result[0]['gender'];
	$address=$result[0]['housenumber'].' '. $result[0]['society'].', '.$result[0]['street'].', '.$result[0]['locality'].'\n'.$result[0]['city'].'-'.$result[0]['pin'].'\n'.$result[0]['state'].', '.$result[0]['country'];
	$bloodgroup=$result[0]['bloodgroup'];
	$allergies=$result[0]['allergies'];
	$emergencycontact=$result[0]['emergencycontact'];
	$mobile=$result[0]['mobile'];
	$id=$result[0]['patient_id'];
	
    return $response->withJson([
			'id' => $id,
			'fname' => $fname,
			'mname' => $mname,
			'lname' => $lname,
			'gender' => $gender,
			'mobile' => $mobile,
			'dob' => $dob,
			'address' => $address,
			'bloodgroup' => $bloodgroup,
			'allergies' => $allergies,
			'emergencycontact' => $emergencycontact
        ]);
    });

/* Prescriptions of Patients */
    
    $app->get('/patient/prescriptions', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='patient'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();
	$patient_email = $allGetVars['email'];
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);
	$stIDFetch =new Cassandra\SimpleStatement ("SELECT patient_id from patient_master where email = '".$patient_email."' ALLOW FILTERING");
	$fIDFetch = $session->executeAsync($stIDFetch);
	$rIDFetch = $fIDFetch->get();

	$patient_id = $rIDFetch[0]['patient_id'];

	$statement = new Cassandra\SimpleStatement ("SELECT * from prescriptions where patient_id =".$patient_id." ALLOW FILTERING");
	$query="SELECT * from prescriptions where patient_id =".$patient_id." ALLOW FILTERING";
	$future = $session->executeAsync($statement);
	$result = $future->get();

	$countRows=$result->count();


	$json_resp=array(array());

	$a = array(); // array of columns
for($c=0; $c<$countRows; $c++){
    $a[$c] = array(); // array of cells for column $c
    for($r=0; $r<7; $r++){ //Change according to the number of keys needed in JSON
        $a[$c][$r] = 0;
    }
}
	//Don't forget the $ sign
	for ($i = 0; $i < $countRows; $i++) 
	{
    		$a[$i][0]=$result[$i]['prescriptions_id'];
    		$a[$i][1]=$result[$i]['patient_id'];
    		$a[$i][2]=$result[$i]['doctor_id'];
    		$a[$i][3]=$result[$i]['dop'];
    		$a[$i][4]=$result[$i]['symptoms'];
    		$a[$i][5]=$result[$i]['diseases'];
    		$a[$i][6]=$result[$i]['medicines'];
    		$a[$i][7]=$result[$i]['fees_charged'];
	}

	$out = array_values($a);
	json_encode($out);
	
	return $response->withJson([
		'prescriptions' => $out
		]);
    });


/* Reports of Patients */
    
    $app->get('/patient/reports', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='patient'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();
	$patient_email = $allGetVars['email'];
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);

	$statement = new Cassandra\SimpleStatement ("SELECT * from patient_master where email = '".$patient_email."' ALLOW FILTERING");
	$future = $session->executeAsync($statement);
	$result = $future->get();


$r_statement = new Cassandra\SimpleStatement ("SELECT blobAsascii(file) as file, r_id,p_id,d_id,time,description from reports where p_id = ".$result[0]['patient_id']." ALLOW FILTERING");
$r_future = $session->executeAsync($r_statement);
$r_result = $r_future->get();

$countRows=$r_result->count();

	$json_resp=array(array());

	$a = array(); // array of columns
for($c=0; $c<$countRows; $c++){
    $a[$c] = array(); // array of cells for column $c
    for($r=0; $r<5; $r++){ //Change according to the number of keys needed in JSON
        $a[$c][$r] = 0;
    }
}
	//Don't forget the $ sign
	for ($i = 0; $i < $countRows; $i++) 
	{
    		$a[$i][0]=$r_result[$i]['r_id'];
    		$a[$i][1]=$r_result[$i]['p_id'];
    		$a[$i][2]=$r_result[$i]['d_id'];
    		$a[$i][3]=$r_result[$i]['file'];
    		$a[$i][4]=$r_result[$i]['time'];
    		$a[$i][5]=$r_result[$i]['description'];
	}

	$out = array_values($a);
	json_encode($out);
	
	return $response->withJson([
		'cn' => $countRows,
		'reports' => $out
		]);
	});
/* End of report*/
// doctor

  $app->get('/doctor/basic', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='doctor'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();
	$doctor_email = $allGetVars['email'];
	
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);
	$statement = new Cassandra\SimpleStatement ("SELECT * from doctor_master where email = '".$doctor_email."' ALLOW FILTERING");
	$future = $session->executeAsync($statement);
	$result = $future->get();
	
	$fname=$result[0]['fname'];
	$mname=$result[0]['mname'];
	$lname=$result[0]['lname'];
	$dob=$result[0]['dob'];
	$gender=$result[0]['gender'];
	$address=$result[0]['roomnumber'].' '. $result[0]['society'].', '.$result[0]['street'].', '.$result[0]['locality']. $result[0]['area'].'\n'.$result[0]['city'].'-'.$result[0]['pin'].'\n'.$result[0]['state'].', '.$result[0]['country'];
	$bloodgroup=$result[0]['bloodgroup'];
	$allergies=$result[0]['allergies'];
	$emergencycontact=$result[0]['emergencycontact'];
	$mobile=$result[0]['mobile'];
	$id=$result[0]['doctor_id'];
	
    return $response->withJson([
			'id' => $id,
			'fname' => $fname,
			'mname' => $mname,
			'lname' => $lname,
			'gender' => $gender,
			'mobile' => $mobile,
			'dob' => $dob,
			'address' => $address,
			'bloodgroup' => $bloodgroup,
			'allergies' => $allergies,
			'emergencycontact' => $emergencycontact
        ]);
    });

//write prescriptions
$app->get('/doctor/prescriptions/write', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='doctor'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();

	$diseases= $allGetVars['diseases'];
	$doctor_id= $allGetVars['doctor_id'];
	$dop = $allGetVars['dop'];
	$medicines= $allGetVars['medicines'];
	$patient_id = $allGetVars['patient_id'];
	$fees_charged= $allGetVars['fees_charged'];
	$symptoms= $allGetVars['symptoms'];
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);  

	 $addPresToDB = new Cassandra\SimpleStatement("INSERT INTO prescriptions (prescriptions_id, diseases, doctor_id, dop,medicines,patient_id,fees_charged,symptoms) VALUES (uuid(),'".$diseases."',".$doctor_id.",'".$dop."','".$medicines."',".$patient_id.",".$fees_charged.",'".$symptoms."')");

        $futurePresDB    = $session->executeAsync($addPresToDB); 

	return $response->withJson([
			'message' => "success",
        ]);
});

// view prescriptions
    $app->get('/doctor/prescriptions/read', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='doctor'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();
	$patient_email = $allGetVars['email'];
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);
	$stIDFetch =new Cassandra\SimpleStatement ("SELECT patient_id from patient_master where email = '".$patient_email."' ALLOW FILTERING");
	$fIDFetch = $session->executeAsync($stIDFetch);
	$rIDFetch = $fIDFetch->get();

	$patient_id = $rIDFetch[0]['patient_id'];

	$statement = new Cassandra\SimpleStatement ("SELECT * from prescriptions where patient_id =".$patient_id." ALLOW FILTERING");
	$query="SELECT * from prescriptions where patient_id =".$patient_id." ALLOW FILTERING";
	$future = $session->executeAsync($statement);
	$result = $future->get();

	$countRows=$result->count();


	$json_resp=array(array());

	$a = array(); // array of columns
for($c=0; $c<$countRows; $c++){
    $a[$c] = array(); // array of cells for column $c
    for($r=0; $r<7; $r++){ //Change according to the number of keys needed in JSON
        $a[$c][$r] = 0;
    }
}
	//Don't forget the $ sign
	for ($i = 0; $i < $countRows; $i++) 
	{
    		$a[$i][0]=$result[$i]['prescriptions_id'];
    		$a[$i][1]=$result[$i]['patient_id'];
    		$a[$i][2]=$result[$i]['doctor_id'];
    		$a[$i][3]=$result[$i]['dop'];
    		$a[$i][4]=$result[$i]['symptoms'];
    		$a[$i][5]=$result[$i]['diseases'];
    		$a[$i][6]=$result[$i]['medicines'];
    		$a[$i][7]=$result[$i]['fees_charged'];
	}

	$out = array_values($a);
	json_encode($out);
	
	return $response->withJson([
		'prescriptions' => $out
		]);

	});

	//view reports
	$app->get('/doctors/reports', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
	if(!($_SESSION["loggedInAs"]=='doctor'))
	{
		return $response->withJson([
		'message'=>'invalid credentials'
		]);
	}
	$allGetVars = $request->getQueryParams();
	$patient_email = $allGetVars['email'];
	$keyspace = 'test';
	$session = $cluster->connect($keyspace);

	$statement = new Cassandra\SimpleStatement ("SELECT * from patient_master where email = '".$patient_email."' ALLOW FILTERING");
	$future = $session->executeAsync($statement);
	$result = $future->get();


$r_statement = new Cassandra\SimpleStatement ("SELECT blobAsascii(file) as file, r_id,p_id,d_id,time,description from reports where p_id = ".$result[0]['patient_id']." ALLOW FILTERING");
$r_future = $session->executeAsync($r_statement);
$r_result = $r_future->get();

$countRows=$r_result->count();

	$json_resp=array(array());

	$a = array(); // array of columns
for($c=0; $c<$countRows; $c++){
    $a[$c] = array(); // array of cells for column $c
    for($r=0; $r<5; $r++){ //Change according to the number of keys needed in JSON
        $a[$c][$r] = 0;
    }
}
	for ($i = 0; $i < $countRows; $i++) 
	{
    		$a[$i][0]=$r_result[$i]['r_id'];
    		$a[$i][1]=$r_result[$i]['p_id'];
    		$a[$i][2]=$r_result[$i]['d_id'];
    		$a[$i][3]=$r_result[$i]['file'];
    		$a[$i][4]=$r_result[$i]['time'];
    		$a[$i][5]=$r_result[$i]['description'];
	}

	$out = array_values($a);
	json_encode($out);
	
	return $response->withJson([
		'cn' => $countRows,
		'reports' => $out
		]);
	});

});
$app->run();
