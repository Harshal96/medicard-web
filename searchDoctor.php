<style type="text/css">
    .containershow ul {
    padding: 10px; 
    margin: 0;
    list-style-type: none;
}
.containershow ul li {
    width: 25%;
    height: 25%;
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

foreach ($result as $row) { 
    $hnc_id = $row['hnc_id'];
    foreach ($result2 as $row2) { 
        $doc_id = $row2['doctor_id'];
        $statement3 = new Cassandra\SimpleStatement ("SELECT * from hospitalemployees where doctor_id = ".$doc_id." and hnc_id = ".$hnc_id." ALLOW FILTERING");
        $future3 = $session->executeAsync($statement3);
        $result3 = $future3->get();
         ?>
         <div class="containershow">
         <ul>
         <?php
        foreach ($result3 as $row3) {
           ?> <li> <a href="doctor_profile.php?id=<?= $doc_id?>" > <?php echo $row2['fname'].' '.$row2['mname'].' '.$row2['lname'].'<br><br>'.$speciality.'<br><br>'.
           $row['shopnumber'].' '.$row['society'].'<br>'.$row['locality'].' '.$row['street'].'<br>'.$row['area'].'<br> '.$row['city'] ; ?></a> </li><?php
        }
?> </ul>
<?php
    }
}
?>
