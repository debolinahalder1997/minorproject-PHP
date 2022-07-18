<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php';?>
<link rel="stylesheet" href="css/table.css">
    <title>final calculation</title>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$update="UPDATE `book_issued` SET `DUE DAYS`= DATEDIFF(`SUBMISSION_DATE`,`DATE_OF_ISSUE`)-10 ,`FINE`=`DUE DAYS`*2";
$COMMIT=mysqli_query($con,$update);
$fetch="SELECT * FROM `book_issued` i INNER JOIN
 `books-detail` b ON i.B_ID=b.ISBN INNER JOIN `student-detail` s ON i.S_ID=s.id";
$store=mysqli_query($con,$fetch);?>
<div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>I_ID</th>
                    <th>STUDENT ID</th>
                    <th>STUDENT NAME</th>
                    <th>BOOK ID</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>DATE OF ISSUE</th>
                    <th>SUBMISSION DATE</th>
                    <th>Due Days</th>
                    <th>Fine</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($array=mysqli_fetch_array($store))
                {
                    ?>
                    <tr>
                    <td><?php echo $array['I_ID']?></td>
                    <td><?php echo $array['S_ID']?></td>
                    <td><?php echo $array['name']?></td>
                    <td><?php echo $array['B_ID']?></td>
                    <td><?php echo $array['TITLE']?></td>
                    <td><?php echo $array['AUTHOR']?></td>
                    <td><?php echo $array['DATE_OF_ISSUE']?></td>
                    <td><?php echo $array['SUBMISSION_DATE']?></td>
                    <td><?php echo $array['DUE DAYS']?></td>
                    <td><?php echo $array['FINE']?></td>
                    </tr>        
                    <?php
               
                }

            ?>
            </tbody>
        </table>
    </div><br>
<?php include 'footer.php';?>
</body>
</html>