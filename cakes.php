<html>

<head>
    <?php
    include_once("include/conn.php");
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/cakes.css">
</head>
<?php
include_once("include/nav-bar.php");
?>
<body>
<div class="container">

    <h3>Birthday cakes</h3>
    <!---store items--->
    <div class="row">

        <?php



        $query = "SELECT * FROM `addcake` ORDER BY `addcake`.`id` ";
        $query_run = mysqli_query($connection, $query);


        if (mysqli_num_rows($query_run) > 0) {

            foreach ($query_run as $row) {
                while ($row = mysqli_fetch_assoc($query_run)) {

                    ?>

                    <!--single item--->

                    <div class=" col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item" data-item="store_item">

                        <div class="card" style="width: 19rem;">

                            <div class="img-container">

                                <img src="<?php echo 'img/' . $row['image'] ?>" width="305px;" height="370px;"
                                     alt="cakes">
                            
                            </div>


                            <div class="card-body">
                                <div class="card-text  justify-content-between text-capitalize">

                                    <h5 id="store-item-name"> <?php echo $row['name'] ?></h5>
                                    <h5 id="store-item-value">
                                        $
                                        <strong id="store-item-price"
                                                class="font-weight-bold"><?php echo $row['price'] ?></strong></h5>

                                    <!-- Button trigger modal -->



                                    <form action="cart.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value=" <?php echo $row['id'] ?> ">

                                        <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['price'] ?>">

                                        <button type="submit" name="add_to_cart" class="btn btn-success">add to cart
                                        </button>
                                    </form><br>
                                    <form action="loadbcake.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" name="more" value="more" class="btn btn-success"> more
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php


                }

            }
        }
        ?>


    </div>
</div>

</body>

<br>
<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</html>
