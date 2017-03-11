<?php
		
require 'vendor/autoload.php';

$settings =  [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new Slim\App($settings);


//$app = new Slim\App();

$app->add(new \Slim\Middleware\HttpBasicAuthentication(array(

    "path" => "/api",

    "secure" => false,

    "users" => [
        "demouser" => "123",
    ],
    "error" => function ($request, $response, $arguments) {

        return $response->withStatus(401);
    }
)));

$app->group('/api', function () use ($app) {
    
    $app->get('/test', function ($request, $response, $args) use ($app) {
	$allGetVars = $request->getQueryParams();
        return $response->withJson([
			//
				/*
				 //GET
			$allGetVars = $request->getQueryParams();
			foreach($allGetVars as $key => $param){
			   //GET parameters list
			}

			//POST or PUT
			$allPostPutVars = $request->getParsedBody();
			foreach($allPostPutVars as $key => $param){
			   //POST or PUT parameters list
			}

			Single parameters value:

			//Single GET parameter
			$getParam = $allGetVars['title'];

			//Single POST/PUT parameter
			$postParam = $allPostPutVars['postParam'] 
				 */
			'request sent' => $allGetVars
        ]);
    });
    
$app->get('/patient/reports', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
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
foreach ($r_result as $r_row) 
{
	//$CurlConnect = curl_init();
//curl_setopt($CurlConnect, CURLOPT_URL, 'http://localhost/medicard-web/download_report.php?r_id='.$r_row['r_id'].'');
//$Result = curl_exec($CurlConnect);

$send = $r_row['file'];
$r_id =$r_row['r_id'];
$p_id =$r_row['p_id'] ;
$d_id = $r_row['d_id'];
$description = $r_row['description'];
$time     =$r_row['time'];
}

    return $response->withJson([
'r_id' => $r_id, 
'p_id' => $p_id,
'd_id' => $d_id,
'description' => $description,
'time' => $time,
'file' => $send
        ]);
    });

/* End of prescriptions*/
// doctor

  $app->get('/doctor/basic', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
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
});
$app->run();