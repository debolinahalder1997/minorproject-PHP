<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <?php include 'links.php';?>
<style>
    <?php include 'css/home.css';
    include 'css/footer.css';
   ?>
    </style>
</head>
<body>
    <?php include "header.php" ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="picture/lib.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="picture/lib.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="picture/lib.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
    <div class="jumbotron jumbotron-fluid bg">
        <div class="container">
            <h1 class="lol">Library Management System
                <a class="btn btn-primary pull-right" href="\backend\fullstack\about.php" role="button">Learn more</a></h1>
        </div>
    </div>

    <div class="main">
        <div class="left"> <img  src="picture/Lib.svg"> </div>
            <div class="right">
                <h1 class="heading-primary">
                <span class="heading-primary-main">Welcome</span>
                <span class="heading-primary-sub">to the world of knowledge</span>
                </h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fugit cum assumenda dolor quisquam, error aliquam esse, eligendi, maxime nostrum blanditiis hic recusandae nesciunt aut a maiores ipsum quos excepturi.
            </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>