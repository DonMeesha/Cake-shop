<html>

<head>
    <?php
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/loadbcake.css">

</head>

<body>
<?php
include_once("include/nav-bar.php");
?>
<br>
<br>




<div class="container py-3">
   
   
 <?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cake";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection, $db_name);

    if(isset($_POST['more']))
    {
          $id= $_POST['edit_id'];
   
    $query = "SELECT * FROM `addcake` WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
     if(mysqli_num_rows($query_run)>0)
                            {
                                   while($row = mysqli_fetch_assoc($query_run))
                                {
?>
    <div class="card mb-3">
         <div class="row">
         
         <div class=" image col-md-4">
            <?php echo '<img src ="admin/examples/uploads/'.$row['image'].'" width="350px;" height="400px;" alt="cakes">' ?>
         </div>
            
            <div class="col-md-8">
                <div class="card-body">
                    <br><br>
                    
                    <h3 class="card-title"> <?php echo $row['name'] ?></h3>
                    <br><br>
                    
                     <div class="form-group col-md-6">
                       <h5> <label for="inputState">Price : $ <?php echo $row['price'] ?></label></h5>
                       
                    </div>
                  
                    
                    <div class="form-group col-md-6">
                        <h5><label for="inputState">weight : <?php echo $row['weight'] ?> KG</label></h5>
                       
                    </div>
                    
                     <div class="form-group col-md-12">
                       <h5> <label for="inputState">Description : <?php echo $row['description'] ?></label></h5>
                        
                    </div>
                    
                    
                    <br>
                    <a href="cakes.php" class="btn btn-secondary">Close</a>
                    <a href="payment.php" class="btn btn-primary"> Buy Now</a>
                   
                   
                  
                   
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


<br><br>



<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</body>

</html>



