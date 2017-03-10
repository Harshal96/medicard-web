<style type="text/css">

    .containershow 
    {
        width: 100%;
        float: left;
    }
    .containershow ul {
    padding: 10px; 
   margin: 0;
    list-style-type: none;
    width: 100%;
}
.containershow ul li {
    width: 200px;
    height: 200px;
    background-color: #eee;
    float: left;
    margin:10px;
    padding: 10px;
    text-decoration: none;
}
.containershow ul li a
{
    text-decoration: none;
    font-size: 15px;
}
</style>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
</body>
</html>
<?php
$locality = $_POST['geocomplete'];
$speciality = $_POST['speciality'];
include 'connectivity.php';
$keyspace = 'test';
$session = $cluster->connect($keyspace);
$statement = new Cassandra\SimpleStatement ("SELECT * from hospitalsandclinics where locality = '".$locality."' ALLOW FILTERING");
$statement2 = new Cassandra\SimpleStatement ("SELECT * from doctor_master where speciality = '".$speciality."' ALLOW FILTERING");

$future = $session->executeAsync($statement);

$result = $future->get();
$future2 = $session->executeAsync($statement2);
$result2 = $future2->get();
?>         <h3> Doctors (hospitals/clinics) found : <br></h3>
         <section class="containershow">
         <ul> 
         <?php
foreach ($result as $row) { 
    $hnc_id = $row['hnc_id'];
    foreach ($result2 as $row2) { 
        $doc_id = $row2['doctor_id'];
        $statement3 = new Cassandra\SimpleStatement ("SELECT * from hospitalemployees where doctor_id = ".$doc_id." and hnc_id = ".$hnc_id." ALLOW FILTERING");
        $future3 = $session->executeAsync($statement3);
        $result3 = $future3->get();
        foreach ($result3 as $row3) {
           ?> <li> <a href="doctor_profile.php?id=<?= $doc_id?>" > <?php echo $row2['fname'].' '.$row2['mname'].' '.$row2['lname'].'<br><br>'.$speciality.'<br><br>'. $row['name'].'<br><br>'.
           $row['shopnumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['area'].'<br> '.$row['city'] ; ?></a> </li><?php
    }
}
}
?> 
</ul>
</section>
<section class="containershow">
 <h3> Diagnostic centers at this location : <br></h3>
 <ul> 
         <?php
$statement4 = new Cassandra\SimpleStatement ("SELECT * from diagnostics_master where locality = '".$locality."' ALLOW FILTERING");
$future4 = $session->executeAsync($statement4);
$result4 = $future4->get();
?> 
         <?php
        foreach ($result4 as $row4) {
           ?> <li> <a href="diagnostics_profile.php?id=<?= $row4['diagnostics_id']?>" > <?php echo $row4['dname'].'<br><br>'.
           $row4['shopnumber'].' '.$row4['society'].'<br>'.$row4['locality'].' '.$row4['street'].'<br>'.$row4['area'].'<br> '.$row4['city'] ; ?></a> </li><?php
        }
?> 
</ul>
</section>

