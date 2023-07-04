<html>
<head>
    <?php
    include_once("include/header.php");
    ?>
</head>
<body>
<?php
include_once("include/nav-bar.php");
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/Birthday.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/anniversary.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/cup_cakes.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/valentine.jpg" alt="fourth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br><br>
<section>
    <div class="container">
        <h1><i>
                <center>Welcome to Jay's Baking</center>
            </i></h1>
    </div>
</section>
<br><br>


<!---------------------------------------------------ImageSection----------------------------------------------------------->
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-3">
                <a href="">
                    <figure><img alt="" src="img/middle.jpg" class="class_round"></figure>
                </a></div>
                <div class="col-6 col-sm-4">
                <!--<img src="" class="bgshadow">--->
                    <div class="textinfo">
                     <h3>Birthday Cakes</h3>
                        <p class="title1">Talk Us !</p>
                     <a class="btn btn-primary btn-md btn1" href="cakes.php"> Read More</a>
                    </div>
                </div>

                <div class="w-100 d-none d-md-block"></div>

                    <div class="col-6 col-sm-3">
                        <a href="">
                            <figure><img alt="" src="img/A2.jpg" class="class_round"></figure>
                        </a>
                    </div>
            <div class="col-6 col-sm-4">
                <!--<img src="" class="bgshadow">--->
                <div class="textinfo1">
                    <h3>Special Occasion Cakes</h3>
                    <p class="title1">Talk Us</p>
                    <a class="btn btn-primary btn-md btn1" href="SpecialOccasionCakes.php"> Read More</a>
                </div>
            </div>

            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6 col-sm-3">
                <a href="">
                    <figure><img alt="" src="img/cc1.jpg" class="class_round"></figure>
                </a></div>
            <div class="col-6 col-sm-4">
                <!--<img src="" class="bgshadow">--->
                <div class="textinfo1">
                    <h3>CupCakes</h3>
                    <p class="title1">Talk Us</p>
                    <a class="btn btn-primary btn-md btn1" href="cupcakes.php"> Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------------------------------------EndImageSection----------------------------------------------------->


<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</body>

</html>


