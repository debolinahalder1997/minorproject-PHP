<?php
    $username="root";
    $password="";
    $server='localhost';
    $db='practice';
    $con=mysqli_connect($server,$username,$password,$db);
    $database=mysqli_select_db($con,$db);
    
    if($db)
    {
        ?>
        <script>
            alert('connection successful');
            </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('connection FAILURE');
            </script>
        <?php
    }
?>