<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/registration.css"> -->
    <style>
    <?php
      include 'css/signup.css';
      ?>   
      </style> 
</head>
<body>
<?php include 'header.php'?>	
<br>
	<div class="formclass container-fluid ml-auto mr-auto">
		<h1>Reader entry</h1>
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
			<input type="text" name="f_name" placeholder="FIRST NAME" value="<?php echo  $arrdata['F_name'];?>"><br>
			<input type="text" name="l_name" placeholder="LAST NAME" value="<?php echo  $arrdata['L_name'];?>"><br>
			<input type="email" name="email" placeholder="@EMAIL" value="<?php echo  $arrdata['email'];?>"><br>
            <input type="text" name="text" placeholder="Phone" value="<?php echo $arrdata['phone'];?>"><br>
			<input type="text" name="class" placeholder="class" value="<?php echo  $arrdata['class'];?>"><br>
            <input type="number" name="book_id" placeholder="Book_id" value="<?php echo  $arrdata['book_id'];?>">
            <button type="submit" id="btn" name="submit">UPDATE</button>
            </p>
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
     $F_name=$_POST['f_name'];
     $L_name=$_POST['l_name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $class=$_POST['class'];
     $book_id=$_POST['book_id'];

     $updatequery="UPDATE `student-detail` SET 
     `F_name`='$F_name',`L_name`='$L_name',`email`='$email',`phone`='$phone',`class`='$class',`book_id`='$book_id' WHERE `id`='$idupdate'";//simple my sql query
     
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