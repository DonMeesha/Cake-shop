<?php
include_once("include/conn.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $connection->query("SELECT * FROM addcake WHERE id= 'id' ");
    $row = $query->mysqli_fetch_array();
}

if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];

    $query = $connection->query("SELECT * FROM addcake WHERE id= '$id' ");
    $row = $query->fetch_assoc();

    $cart = array();

    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }

    array_push($cart, $row['id']);

    $_SESSION['cart'] = $cart;
}

?>

<html>

<head>
    <?php
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/cakes.css">
</head>
<body>
<?php
include_once("include/nav-bar.php");
?>

<div class="container">
<br><br>
   <h3>Cart</h3>
    <?php


    if (isset($_SESSION['cart'])) {

        $cart = $_SESSION['cart'];
        ?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($cart as $item) {
                $query = "SELECT * FROM `addcake` WHERE id='$item'";
                $query_run = mysqli_query($connection, $query);
                $row = $query_run->fetch_assoc();
                ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><img src="<?php echo 'img/' . $row['image'] ?>" width="100px;" height="100px;"
                             alt="cakes"></td>
                    <td><?php echo $row['weight'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                   
                            <td><form action="remove_cart.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <input type="submit" value="Remove">
                        </form></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "<h1>Your Cart is Empty!</h1>";
    }
    ?>

</div>



<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</body>
</html>
