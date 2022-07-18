<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links.php'?>
	<Style>
        <?php include "css/update.css"?>
        </style>
    
</head>
<body>
<?php include 'header.php'?>	
<br>
	<div class="formclass container-fluid ml-auto mr-auto">
		<h1>Update Student</h1>
		<div id="form">
		<form name="myform" method="POST">
        <?php
    include 'connection.php';
    $id=$_GET['id'];
    $show="SELECT * FROM `student-detail` WHERE id=($id)";
    $showdata=mysqli_query($con,$show);
    $arrdata=mysqli_fetch_array($showdata);
?>
   
			<input type="text" name="id" placeholder="id" value="<?php echo  $arrdata['id'];?>"><br>
			<input type="text" name="name" placeholder="NAME" value="<?php echo  $arrdata['name'];?>"><br>
			<input type="email" name="email" placeholder="@EMAIL" value="<?php echo  $arrdata['email'];?>"><br>
            <input type="number" name="phone" placeholder="Phone" value="<?php echo $arrdata['phone'];?>"><br>
			<input type="text" name="class" placeholder="class" value="<?php echo  $arrdata['class'];?>"><br>
            <div id="lol"><button type="submit" id="btn" name="submit">UPDATE</button></div>
		</form>
	</div>
</div><br><br>
	<?php include 'footer.php'?>
</body>

</html>

<?php
 if(isset($_POST['submit']))
 {
     $idupdate=$_GET['id'];
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $class=$_POST['class'];

     $updatequery="UPDATE `student-detail` SET `name`='$name',`email`='$email',`phone`='$phone',
     `class`='$class' WHERE `id`='$idupdate'";//simple my sql query
     
     $res=mysqli_query($con,$updatequery);
     if($res)
     {
         ?>
         <script>
             alert("data updated properly");
         </script>
         <?php
     }
     else
     {
         ?>
         <script>
             alert("data not updated");
         </script>
         <?php
     }
 }
?>