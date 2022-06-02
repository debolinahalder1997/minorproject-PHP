<?php
include "connection.php";
$ISBN=$_GET['ISBN'];
$deletequery2="DELETE FROM `books-detail` WHERE `ISBN`='$ISBN'";
$query=mysqli_query($con,$deletequery2);
if($query)
{
    ?>
    <script>
        alert("delete successfully");
    </script>
    <?php
}
else
{
    ?>
<script>
    alert("not deleted");
</script>
<?php
}
header('location:\backend\fullstack\book-record.php');
?>