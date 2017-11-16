<?php include 'includess/config.php'?> 
<?php
    //daily php goes here 
    if(isset($_GET['day']))
    {//show selected day
        $day = $_GET['day'];
    }else{//show current day
        $day = date('l');
    }
    
    ?>
<?php include 'includess/header.php'?>
    <h3>Daily</h3>
    <p>The contents of day is currently <?=$day?></p>
    <p><a href="?day=Monday">Monday</a> </p>
    <p><a href="?day=Tuesday">Tuesday</a> </p>
    <p><a href="?day=Wednesday">Wednsday</a> </p>
    <p><a href="?day=Thursday">Thursday</a> </p>
    <p><a href="?day=Friday">Friday</a> </p>
    <p><a href="?day=Saturday">Saturday</a> </p>
    <p><a href="?day=Sunday">Sunday</a> </p>
   
        
        <?php include 'includess/footer.php'?>