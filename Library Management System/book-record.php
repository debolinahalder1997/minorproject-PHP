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
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>EDITION</th>
                    <th>PUBLICATION</th>
                    <th>qty</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $sql="SELECT * FROM `books-detail`";
            $query=mysqli_query($con,$sql);
            while($res=mysqli_fetch_array($query))
            {
                ?>
                <tr>
                <td><?php echo $res['ISBN'];?></td>
                <td><?php echo $res['TITLE'];?></td>
                <td><?php echo $res['AUTHOR'];?></td>
                <td><?php echo $res['EDITION'];?></td>
                <td><?php echo $res['PUBLICATION'];?></td>
                <td><?php echo $res['QTY'];?></td>
                <td><a href="\backend\fullstack\book_update.php?ISBN=<?php echo $res['ISBN'];?>" data-bs-toggle="tooltip" title="update">
                <i class="fa-solid fa-file-pen" style="color:green;"></i></a></td>
                <td><a href="\backend\fullstack\Delete_book.php?ISBN=<?php echo $res['ISBN'];?>" data-bs-toggle="tooltip" title="delete"><i class="far fa-trash-alt" style="color:red;"></i></a></td>
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

