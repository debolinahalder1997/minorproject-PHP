<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'links.php' ?>
    <style>
    <?php
      include 'css/signup.css';
      ?>   
      </style> 
</head>
<body>
<?php include 'header.php'?>	
<br>
	<div class="formclass container ml-auto mr-auto">
		<h1>Student entry</h1>
		<div id="form">
		<form name="myform" method="POST">
			
			<input type="text" name="name" placeholder="Enter your Name"><br>
			<input type="email" name="email" placeholder="Enter your @EMAIL"><br>
			<input type="number" name="phone" placeholder="Enter your phone number"><br>
			<input type="text" name="class" placeholder="Enter the class you read"><br><br>
			
            <p id="lol">
                <button type="submit" id="btn" name="submit" >Register</button>
                <button type="reset" id="btn-yellow">Reset</button>
            </p>
		</form>
	</div>
</div><br><br>
<?php include 'footer.php'?>
</body>

</html>

<?php
include 'connection.php';
    if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$class=$_POST['class'];

		$insertquery="INSERT INTO `student-detail`(`name`,`email`, `phone`, `class`) VALUES
		('$name','$email','$phone','$class')";//simple my sql query

		$res=mysqli_query($con,$insertquery);
		if($res)
		{
			?>
			<script>
				alert("data inserted");
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("data not inserted properly");
			</script>
			<?php
		}
	}
?>