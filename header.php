<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'links.php';?>
    <style>
      <?php
        include 'css/header.css';
      ?>
    </style>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     
      <a class="navbar-brand" href="\backend\fullstack\home.php"><i class="fa-solid fa-book-bookmark"></i>&nbsp;Nirmal hriday Library</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" href="\backend\fullstack\home.php"><i class="fa-solid fa-house-chimney"></i>Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="\backend\fullstack\student_records.php">student-records</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="\backend\fullstack\book-record.php">Book-records</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="\backend\fullstack\student-entry.php">Student-Entry</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="\backend\fullstack\bookentry.php">Book-Entry</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </body>
</html>