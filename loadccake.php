<html>

<head>
    <title>
        jays baking
    </title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="loadbcake.css">
    <!-- <link rel="stylesheet" type="text/css" href="css,js/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css,js/all.min.css">
    <!--<link rel="stylesheet"  href="path/to/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <!--<link rel="stylesheet" href="https://fontawesome.com/icons/window-close?style=regular">-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>--->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css,js/bootstrap.min.js"></script>
    <script src="cart.js"></script>




</head>

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar navbar-dark ">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="home.html">Home
                        <!---<span class="sr-only">(current)</span>---> </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="Cakes.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cakes</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Cakes.html">Birthday Cakes</a>
                        <a class="dropdown-item" href="Special%20Occasion%20Cakes.html">Special Occasion Cakes</a>
                        <a class="dropdown-item" href="cupcakes.html">CupCakes</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Design</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="design.html">Design a Cake</a>
                        <a class="dropdown-item" href="cupcake%20design.html">Design a CupCake</a>
                    </div>

                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="login.html">Login</a>
                </li>

                <div id="cart-info" class="nav-info align-items-center cart-info d-flex jusitify-content-between mx-lg-5">
                    <span class="cart-info__icon mr-lg-3">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <p class="mb-0 text-capitalize">
                        <span id="item-count"> 2</span>
                        "items - $"
                        <span class="item-total"> 10.40</span>

                    </p>
                </div>
                <!------
                <div  class="cart-btn">
                        <span class="nav-icon">
                            <i class="fas fa-cart-plus"></i>
                        </span>
                        <div class="cart-items">10</div>
                    </div>
------>

            </ul>
            <!-----------------------
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="ID" placeholder="ID" aria-label="ID">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        ------------------------------->
        </div>
    </nav>
</section>
<br>
<br>



<body>
    <div class="container py-3">
<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cake";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection, $db_name);

    if(isset($_POST['ccmore']))
    {
          $id= $_POST['editcc_id'];
   
    $query = "SELECT * FROM `addcupcake` WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
     if(mysqli_num_rows($query_run)>0)
                            {
                                   while($row = mysqli_fetch_assoc($query_run))
                                {
?>
        <div class="card mb-3">
            <div class="row">

                <div class="image col-md-4">
                    <?php echo '<img src ="admin/examples/uploads/'.$row['image'].'" width="350px;" height="400px;" alt="cakes">' ?>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <br><br>

                        <h3 class="card-title"><?php echo $row['name'] ?></h3>
                        <br><br>

                        <div class="form-group col-md-6">
                            <h5> <label for="inputState">Price : $ <?php echo $row['price'] ?></label></h5>
                        </div>


                        <div class="form-group col-md-6">
                            <h5><label for="inputState">Quantity : </label></h5>
                            <input type="text" class="form-control" id="formGroupExampleInput">

                        </div>

                        <div class="form-group col-md-12">
                            <h5> <label for="inputState">Description : <?php echo $row['description'] ?></label></h5>

                        </div>


                        <br>
                        
                        <a href="cupcakes.php" class="btn btn-secondary">Close</a>
                        <button type="button" class="btn btn-primary">Buy Now</button>



                    </div>

                </div>

            </div>

         </div>
<?php
                                
          }
                                    ?>
                                    
    </div>
     <?php
                                    
            }
    }
         ?>
</body>

<br><br>







<!----------------------------------------------------------- Footer --------------------------------------------------------->


<footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: #c7851c;">
        <div class="container">



            <!-- Grid row-->

        </div>
    </div>
    <br>
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Cakes_by_Jay</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"><br>
                <img src="pictures/logo.jpg" width="180px" , height="60px">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text text-dark" href="#!">Birthday Cakes</a>
                </p>
                <p>
                    <a class="dark-grey-text text-dark" href="#!">Special Occasion Cakes</a>
                </p>
                <p>
                    <a class="dark-grey-text text-dark" href="#!">CupCakes</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text text-dark" href="home.html">Home</a>
                </p>
                <p>
                    <a class="dark-grey-text text-dark" href="contact.html">Contact Us</a>
                </p>
                <p>
                    <a class="dark-grey-text text-dark" href="#!">Terms & Condition</a>
                </p>
                <p>
                    <a class="dark-grey-text text-dark" href="login.html">Login</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home"></i> Doncaster, Melbourne, Victoria, Australia.</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i><a href="https://www.w3schools.com/html/"></a> shyamindij9@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +61 426 155 549</p>


            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <br>
    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
        <a class="dark-grey-text" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!----------------------------------------------------------EndFooter------------------------------------------------------------->

</html>
