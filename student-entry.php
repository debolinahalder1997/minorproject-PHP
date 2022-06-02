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
	<div class="formclass container ml-auto mr-auto">
		<h1>Student entry</h1>
		<div id="form">
		<form name="myform" method="POST">
			
			<input type="text" name="f_name" placeholder="FIRST NAME"><br>
			<input type="text" name="l_name" placeholder="LAST NAME"><br>
			<input type="email" name="email" placeholder="@EMAIL"><br>
			<input type="number" name="phone" placeholder="phone number"><br>
			<input type="text" name="class" placeholder="class"><br><br>
			
            			<select name="book_id">
				    <option>Select your book name</option>
				    <?php
  				include 'connection.php';
				$books="SELECT `ISBN`,`TITLE`,`AUTHOR` FROM `books-detail`";
				$query=mysqli_query($con,$books);
				while($res1=mysqli_fetch_array($query))
				{
				?>
				<option>
				<?php echo $res1['ISBN'];?>:
				<?php echo $res1['TITLE'];?>:
				<?php echo $res1['AUTHOR'];?>:
				<hr>
				</option>
				<?php	
				}
		?>
	</select>
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
		$F_name=$_POST['f_name'];
		$L_name=$_POST['l_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$class=$_POST['class'];
		$book_id=$_POST['book_id'];

		$insertquery="INSERT INTO `student-detail`(`f_name`, `l_name`, `email`, `phone`, `class`, `book_id`) 
		VALUES ('$F_name','$L_name','$email','$phone','$class','$book_id')";//simple my sql query
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