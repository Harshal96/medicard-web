
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
</body>
</html>
<?php
$locality = $_POST['geocomplete'];
$bloodtype = $_POST['bloodtype'];

$b = $_POST['bloodtype'];
$bloodtype = '"'.$bloodtype.'"'; 
include 'connectivity.php';
$keyspace = 'test';
$session = $cluster->connect($keyspace);
$statement = new Cassandra\SimpleStatement ("SELECT b_name,address, ".$bloodtype." from bloodbank where locality = '".$locality."' ALLOW FILTERING");
$future = $session->executeAsync($statement);
$result = $future->get();
?>

<body>
    <section class="containershow">
    <table class="rwd-table" >
                <tr>
                    <th>Blood Bank Name</th>
                    <th>Available</th>
                    <th>Address</th>
                </tr>
        <?php
        foreach ($result as $row) {
        ?>  
                <tr>
                    <td><?= $row['b_name'] ?></td>
                    <td><?= $row[$b] ?></td>
                    <td><?= $row['address'] ?></td>
                </tr>
        <?php
            }

        ?> 
    </table>
    </section>
</body>
    
</html>

 