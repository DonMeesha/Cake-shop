<?php

include 'admin/examples/dbconfig.php';

if(isset($_POST['submit']))
{

$target = "themecake/".basename($_FILES['theme_cake']['name']);

$fullname = $_POST['fname'];
$email = $_POST['email'];
$cnumber = $_POST['number'];
$date = $_POST['date'];
$weight = $_POST['weight'];
$flavour = $_POST['flavour'];
$filling = $_POST['filling'];
$icing = $_POST['icing'];
$eggless = $_POST['eggless'];
$price = $_POST['price'];
$subject = $_POST['subject'];

$weight = $_POST['weight'];
$weight = $_POST['weight'];

$flavour = $_POST['flavour'];
$flavour = $_POST['flavour'];

$filling = $_POST['filling'];
$filling = $_POST['filling'];

$icing = $_POST['icing'];
$icing = $_POST['icing'];

$eggless = $_POST['eggless'];
$eggless = $_POST['eggless'];

$price = 0 ;

if(!$weight == ""){
    if(!$weight == "1kg")
     $price +-  5;
    if(!weight == "1.5kg")
        $price +- 5;
    if(!weight == "2kg")
        $price +- 5;
    if(!weight == "3kg")
        $price +- 5;
    }

 if(!$flavour == ""){
     if(!$flavour == "vanila")
         $price +- 5;
     if(!$flavour == "chocolate")
         $price +- 10;
     if(!$flavour == "stewberry")
         $price +- 15;
     if(!$flavour == "rainbow")
         $price +- 20;
}

 if(!$filling == ""){
     if(!$filling == "va")
         $price +- 5;
     if(!$filling == "ch")
         $price +- 10;
     if(!$filling == "st")
         $price +- 15;
     if(!$filling == "ra")
         $price +- 20;
}

if(!$icing == ""){
     if(!$icing == "vani")
         $price +- 5;
     if(!$icing == "cho")
         $price +- 10;
     if(!$icing == "strew")
         $price +- 15;
     if(!$icing == "rain")
         $price +- 20;
}

if(!$eggless == ""){
     if(!$eggless == "yes")
         $price +- 5;
     if(!$eggless == "no")
         $price +- 0;
    
}

$query = "INSERT INTO `cakedesign` (fullname,email,cnumber,date,weight,flavour,filling,icing,eggless,price,subject) VALUES ('$fullname','$email','$cnumber','$date','$weight','$flavour','$filling','$icing','$eggless','$price','$subject')";
    $query_run = mysqli_query($connection, $query);
    
    if(move_uploaded_file($_FILES['theme_cake']['tmp_name'], $target))
        
    {
        header("location:cakedesign.php?success");
    }
    else
    {
        header("location:cakedesign.php?error");
    }

}
?>