<?php
    include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'links.php';?>
<link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>
<body><br><br>
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
                    <th>submit</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $sql="SELECT * FROM ((`book_issued` i INNER JOIN `books-detail` b ON i.B_ID = b.ISBN) 
             INNER JOIN `student-detail` s ON i.S_ID = s.id) WHERE i.SUBMISSION_DATE='0000-00-00'";

            $find=mysqli_query($con,$sql);
            while($res=mysqli_fetch_array($find))
            {
                ?>
                <tr>
                    <form method="POST">
                        <td><input id="sin" name="i_id" value="<?php echo $res['I_ID'];?>"></td>
                        <td><?php echo $res['S_ID'];?></td>
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['B_ID'];?></td>
                        <td><?php echo $res['TITLE'];?></td>
                        <td><?php echo $res['AUTHOR'];?></td>
                        <td><?php echo $res['DATE_OF_ISSUE'];?></td>
                        <td><input type="date" name="sub_date"></td>
                        <td><button class="btn btn-success" type="submit" name="submit">submit</button></td>
                    </form>
                </tr> 
                <?php
                    if(isset($_POST["submit"]))
                    {
                        $i_id=$_POST["i_id"];
                        $sub_date=$_POST["sub_date"];
                        $query="UPDATE `book_issued` SET `SUBMISSION_DATE`='$sub_date' WHERE I_ID='$i_id' ";
                        $my=mysqli_query($con,$query);
                        if($my)
                        {
                            ?>
                            <script>alert("data insrted")</script>
                            <?php
                            include "finalcal.php";
                        }
                        else
                        {
                            ?>
                            <script>alert("data not insrted")</script>
                            <?php
                        }
                    }
            }
            ?>
            </tbody>
        </table>
    </div><br>
    <?php include 'footer.php';?>
</body>
</html>
