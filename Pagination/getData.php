<?php
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 5;
    
    //get number of rows
    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM patient_master");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
    
    //initialize pagination class
    $pagConfig = array('baseURL'=>'Pagination/getData.php', 'totalRows'=>$rowCount, 'currentPage'=>$start, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = $db->query("SELECT * FROM patient_master ORDER BY patient_id DESC LIMIT $start,$limit");
    
    if($query->num_rows > 0){ ?>
        <table>
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['patient_id'];
        ?>
			<tr><a href="javascript:void(0);"><h2><?php echo $row["Fname"]; ?></h2></a></tr>
        <?php } ?>
</table>
        <?php echo $pagination->createLinks(); ?>
<?php }
}
?>