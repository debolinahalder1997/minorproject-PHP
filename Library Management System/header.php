<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'links.php';?>
   <style>
    <?php include "css/header.css"?>
    </style>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     
      <a class="navbar-brand my" href="index.php">
        <i class="fa-solid fa-book-bookmark"></i>&nbsp;Nirmal hriday Library
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
        <ul class="navbar-nav" id="lefti">

          <li class="nav-item">
            <a class="nav-link active my" href="index.php"><i class="fa-solid fa-house-chimney"></i>&nbsp;Home</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle my" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             issue/submission</a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item " href="\book_issue.php">Book Issue</a></li>
          
              <li><a class="dropdown-item" href="\submission.php">Book Submission</a></li>

              <li><a class="dropdown-item" href="\finalcal.php">final billing</a></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle my" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Entry detail</a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item " href="\student-entry.php">Student-Entry</a></li>
          
              <li><a class="dropdown-item" href="\book_issue.php">Book-Entry</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle my" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              records</a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="\student_records.php">student-records</a></link>
            
              <li><a class="dropdown-item" href="\book-record.php">Book-records</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>