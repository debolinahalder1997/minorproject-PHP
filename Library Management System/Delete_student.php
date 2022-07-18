<?php
include "connection.php";
$id=$_GET['id'];
$deletequery1="DELETE FROM `student-detail` WHERE `id`='$id'";
$query=mysqli_query($con,$deletequery1);
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
header('location:\backend\fullstack\student_records.php');
?>