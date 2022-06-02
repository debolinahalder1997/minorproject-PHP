<!DOCTYPE html>
<html lang="en">
<head>
<title>table</title>
<?php include 'links.php';?>
    <style>
        <?php include 'css/signup.css';
        include 'css/footer.css'?>
    </style>
</head>
<body>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <?php include 'header.php';?>
    <div class="formclass container-fluid ml-auto mr-auto">
        <h1>New Books Data</h1>
		<div id="form">
            <form method="POST">
            <input type="text" name="title" placeholder="Enter Title">
            <input type="text" name="author" placeholder="Enter Author">
            <input type="text" name="edition" placeholder="Enter Edition">
            <input type="text" name="publication" placeholder="Enter Publication"> 
            <input type="number" name="qty" placeholder="Enter quantity">
               <table>
                        <p id="lol">
                           <td> <button type="submit" id="btn" name="submit" >Register</button></td>
                          <td>  <button type="reset" id="btn-yellow">Reset</button></td>
                        </p>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php include 'footer.php';?>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit']))
	{
		$TITLE=$_POST['title'];
		$AUTHOR=$_POST['author'];
		$EDITION=$_POST['edition'];
		$PUBLICATION=$_POST['publication'];
        $QTY=$_POST['qty'];

		$insertquery="INSERT INTO `books-detail`(`TITLE`, `AUTHOR`, `EDITION`, `PUBLICATION`,`QTY`) 
        VALUES ('$TITLE','$AUTHOR','$EDITION','$PUBLICATION','$QTY')";//simple my sql query
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