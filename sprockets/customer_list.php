<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includess/config.php';?>
<?php include 'includess/header.php';?>
<h1><?=$pageID?></h1>
<?php
$sql = "select * from TopTwentyAllTime";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
        echo 'LastName: <b>' . $row['LastName'] . '</b> ';
        echo 'Position: <b>' . $row['Position'] . '</b> ';
        
        echo '<a href="customer_view.php?id=' . $row['PlayerID'] . '">' . $row['FirstName'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer();?>