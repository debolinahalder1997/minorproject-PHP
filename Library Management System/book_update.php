<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php';
    ?>
		<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
<?php include 'header.php'?>	
<br>
	<div class="formclass container-fluid ml-auto mr-auto">
		<h1>BOOK UPDATE</h1>
		<div id="form">
		<form method="POST">

        <?php
    include 'connection.php';
    $ISBNUPDATE=$_GET['ISBN'];
    $show="SELECT * FROM `books-detail` WHERE `ISBN`=($ISBNUPDATE)";
    $showdata=mysqli_query($con,$show);
    $arrdata=mysqli_fetch_array($showdata);?>

                <table  cellpadding="5" cellspacing="5">
                <tr>
                        <td class="td"> Enter Title :</td>
                        <td> <input type="text" name="ISBN" value="<?php echo $arrdata['ISBN'];?>"> </td>
                    </tr>
                    <tr>
                        <td class="td"> Enter Title :</td>
                        <td> <input type="text" name="title" value="<?php echo $arrdata['TITLE'];?>"> </td>
                    </tr>
                    <tr>
                        <td class="td"> Enter Author :</td>
                        <td> <input type="text" name="author" value="<?php echo $arrdata['AUTHOR'];?>"> </td>
                    </tr>
                    <tr>
                        <td class="td"> Enter Edition :</td>
                        <td> <input type="text" name="edition" value="<?php echo $arrdata['EDITION'];?>"> </td>
                    </tr>
                    <tr>
                        <td class="td"> Enter Publication: </td>
                        <td> <input type="text" name="publication" value="<?php echo $arrdata['PUBLICATION'];?>"></td>
                    </tr> 
                </table>
                <div id="lol"><button type="submit" id="btn" name="submit" >UPDATE</button> </div>
            </form>
	</div>
</div><br><br>
	<?php include 'footer.php'?>
</body>

</html>

<?php
 if(isset($_POST['submit']))
 {
     $ISBNUPDATE=$_GET['ISBN'];
     $TITLE=$_POST['title'];
     $AUTHOR=$_POST['author'];
     $EDITION=$_POST['edition'];
     $PUBLICATION=$_POST['publication'];

     $UPDATEquery="UPDATE `books-detail` SET`TITLE`='$TITLE',
     `AUTHOR`='$AUTHOR',`EDITION`=' $EDITION',`PUBLICATION`='$PUBLICATION' WHERE `ISBN`='$ISBNUPDATE'";//simple my sql query
     
     $res=mysqli_query($con,$UPDATEquery);
     if($res)
     {
         ?>
         <script>
             alert("DATA UPDATED PROPERLY");
         </script>
         <?php
     }
     else
     {
         ?>
         <script>
             alert("DATA NOT UPDATED");
         </script>
         <?php
     }
 }
?>