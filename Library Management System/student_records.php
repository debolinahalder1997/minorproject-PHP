<!DOCTYPE html>
<html lang="en">
<head>
<title>table</title>
<?php include 'links.php';?>
    <style>
        <?php include 'css/table.css';
        include 'css/footer.css'?>
    </style>
</head>
<body>
    <?php
    include "header.php" ?>
    <div class="table-responsive"><br>
        <h1 style="text-align:center">Student Record</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>class</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $sql="SELECT * FROM `student-detail`";
            $query=mysqli_query($con,$sql);
            while($res=mysqli_fetch_array($query))
            {
                ?>
                <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['email'];?></td>
                <td><?php echo $res['phone'];?></td>
                <td><?php echo $res['class'];?></td>
                <td><a href="\backend\fullstack\update_student.php?id=<?php echo $res['id'];?>" data-bs-toggle="tooltip" title="update"><i class="fa-solid fa-file-pen" aria-hidden="true" style="color:green;"></i></a></td>
                <td><a href="\backend\fullstack\Delete_student.php?id=<?php echo $res['id'];?>" data-bs-toggle="tooltip" title="delete"><i class="far fa-trash-alt" style="color:red;"></i></a></td>
            </tr> 
            <?php
            }
            ?>        
            </tbody>
        </table>
    </div><br><br>
    <?php include 'footer.php';?>
</body>
</html>

