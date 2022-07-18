<!DOCTYPE html>
<html lang="en">
<head>
	<<style>
        <?php include 'css/table.css';
        include 'css/footer.css'?>
    </style>
	<?php include "links.php";?>
</head>
<body>
<?php include 'header.php'?>
<br><br>
	<div class="formclass container">
		<h1>Student entry</h1>
		<div id="form">
			<form name="myform" method="POST">
				
				<select name="student_id">
					<option >student id</option>
						<?php
						include 'connection.php';
						$STUDENT="SELECT `id`,`name` FROM `student-detail`";
						$query=mysqli_query($con,$STUDENT);
						while($res=mysqli_fetch_array($query))
						{
						echo "<option value=" .$res['id']. ">" .$res['id']. " : " .$res['name']."</option>";
						echo "<hr></option>";
						}
						?>
				</select>

				<select name="book_id">
					<option >book name</option>
						<?php
						$books1="SELECT `ISBN`,`TITLE`,`AUTHOR` FROM `books-detail`";
						$query=mysqli_query($con,$books1);
						while($res2=mysqli_fetch_array($query))
						{
						echo "<option value=" .$res2['ISBN']. ">".$res2['ISBN']. " : ".$res2['TITLE']." , ".$res2['AUTHOR']. "</option>";
						echo "<hr></option>";
						}
						?>
				</select>
				<input name='DATE_OF_ISSUE' type='date'>
				<br><br>
				<p id="lol">
					<button id="btn" type="submit" name="submit">submit</button>
				</p>
			</form>
		</div>
	</div><br><br><br><br>
<?php include 'footer.php'?>
</body>
</html>
<?php
include "connection.php";

if(isset($_POST['submit']))
{
	$STUDENT_ID = $_POST['student_id'];
	$BOOK_ID = $_POST['book_id'];
	$DATE_OF_ISSUE = $_POST['DATE_OF_ISSUE'];
	
	
	$insertquery="INSERT INTO `book_issued` (`S_ID`,`B_ID`,`DATE_OF_ISSUE`) 
	VALUES ('$STUDENT_ID','$BOOK_ID','$DATE_OF_ISSUE')";//simple my sql query
	
	$res=mysqli_query($con,$insertquery);
	if($res)
	{
		$balance="UPDATE `books-detail` SET `QTY`=`QTY`-1 WHERE `ISBN`=$i_id";
		$mybal=mysqli_query($con,$balance);
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
