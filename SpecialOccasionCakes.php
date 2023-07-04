<html>

<head>
    <?php
    include_once("include/conn.php");
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/SpecialOccasionCakes.css">
</head>
    <?php
        include_once("include/nav-bar.php");
    ?>
<div class="container">

    <h3>Anniversary cakes</h3>
    <!---store items--->
    <div class="row">

        <!--single item--->
        <div class=" col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item" data-item="store_item">

            <div class="card" style="width: 19rem;">

                <div class="img-container">
                    <img src=""
                     alt="cakes">         
                </div>


                <div class="card-body">
                    <div class="card-text  justify-content-between text-capitalize">

                        <h5 id="store-item-name"> cake</h5>
                        <h5 id="store-item-value">
                            $
                        <strong id="store-item-price"
                        class="font-weight-bold">$50</strong></h5>

                             <!-- Button trigger modal -->



                        <form action="cart.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value=" ">

                            <input type="hidden" name="name" value="">
                            <input type="hidden" name="price" value="">

                            <button type="submit" name="add_to_cart" class="btn btn-success">add to cart
                            </button>
                        </form>
                        <br>
                        <form action="loadbcake.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="edit_id" value="">
                            <button type="submit" name="more" value="more" class="btn btn-success"> more
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<br>
<br>

<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>

</html>