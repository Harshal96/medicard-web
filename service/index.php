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
    
    $app->get('/patient/basic', function ($request, $response, $args) use ($app) {
	include '../connectivity.php';
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
			'fname' => $fname,
			'lname' => $lname
        ]);
    });
});
$app->run();
