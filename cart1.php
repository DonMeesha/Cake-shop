<?php
session_start();
if (!empty($_SESSION['id'])) {
session_start();
require('admin/examples/dbconfig.php');

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$weight=$_POST['weight'];
$userID= $_SESSION['id'];
$item_total=$price*$weight;
$dateFunction = date('Y-m-d H:i:s');

$array = explode(' ', $dateFunction);
$date = $array[0];

$status = 'Processing';
    
    $SQL =  "SELECT weight FROM addcake WHERE id = '".$id."' ";
    $result = mysqli_query($connection, $SQL);
    if (mysqli_num_rows($result) > 0) {
        $row =  mysqli_fetch_assoc($result);
        $qyt = $row['weight'];
        $array = explode(' ', $qyt);
        $newQYT = $array[0];
    }
    
    $fQyt = $newQYT - $weight;
    $fQyt = $fQyt . ' Kg';

    $vegdb = "INSERT INTO cart (vegid,userid,name,quantity,price,item_total, status, date) VALUES ('$id','$userID','$name','$quantity','$price','$item_total', '$status', '$date')";
    $get= mysqli_query($conn,$vegdb);

        if($get==true){
            $updateQYT = 'UPDATE vegetablelist SET quantity = "'.$fQyt.'" WHERE vid = "'.$id.'"';
            $resultQYT=mysqli_query($conn,$updateQYT);
            
            header("Location:Product.php?dbsend");
        }
        else{
            echo "error";
        }
}
else{
         header("Location:Product.php?loginFirst=loginFirst");
}

?>