<?php
session_start();

$connection = mysql_connect("localhost","root", "" , "cake" );

if(isset($_POST['registerbtn']))
    
{
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $cpassword =$_POST['confirmpassword'];
    
    if($password===$cpassword){
        
         $query = "INSERT INTO  'register' (username,email,password) VALUES ('$username','$email','$password')";
    $query_run =mysql_query($connection.$query);
    
    if ($query_run)
    {
        //echo "saved";
        $_SESSION['success'] "admin profile added";
        header('location: register.php')
    }
    else
    {
        //echo "unsaved";
        $_SESSION['status'] "admin profile not added";
        header('location: register.php')
    }
}
    else
    {
       $_SESSION['status'] "password and confirm password does not match";
        header('location: register.php') 
        }
}
    
   
?>