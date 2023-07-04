<?php
session_start();



$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection, "cake");

if(isset($_POST['registerbtn']))
    
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["password"];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    
    if(mysqli_num_rows($email_query) > 0)
    {
        $_SESSION['status'] = "email already taken. please try another one.";
        $_SESSION['status_code'] = "error";
        header("location:user1.php");
     
    }
    
    if($password == $cpassword)
    {
        
      $query ="INSERT INTO `register`(username,email,password) VALUES ('$username','$email','$password')";
      $query_run =mysqli_query($connection, $query);
    
            if($query_run==true)
            {
                $_SESSION['status'] = "admin profile added";
                $_SESSION['status_code'] = "success";
                header("location:user1.php?success");
             }
                else
            {
                //echo "unsaved";
                $_SESSION['status'] = "admin profile  not added";
                $_SESSION['status_code'] = "error";
                header("location:user1.php?error");
            }
    }
       else
        {
            $_SESSION['status'] = "password and confirm password does not match";
            $_SESSION['status_code'] = "warning";
            header("location: user1.php");
        }
   }






if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "your Data is updated";
        $_SESSION['status_code'] = "success";
        header('location: user1.php');
    }
    else
    {
        $_SESSION['status'] = "your Data is NOT updated";
        $_SESSION['status_code'] = "error";
        header('location: user1.php');
    }
}





if(isset($_POST['delete_btn']))
    
{
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "your data is deleted";
        $_SESSION['status_code'] = "success";
        header('location: user1.php');
    }
    else
    {
        $_SESSION['status'] = "your data is not deleted";
        $_SESSION['status_code'] = "error";
        header("location: user1.php?error");
    }
}



if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    
    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
        
        if(mysqli_fetch_array($query_run))
        {
            $_SESSION['username'] = $email_login;
            header('location: dashboard.php');
        }
    else
    {
        $_SESSION['status'] = 'Email id / password is invalid';
            header('location: login.php');
    }
}






if(isset($_POST['save_cake']))
    
{
    $target ="uploads/".basename($_FILES['cake_image']['name']);
    
    
    $name = $_POST['cake_name'];
    $weight = $_POST['cake_weight'];
    $price = $_POST['cake_price'];
    $description = $_POST['cake_description'];
    $images = $_FILES['cake_image']['name'];
    
    
    
    $query ="INSERT INTO `addcake`(name,weight,price,description,image) VALUES ('$name','$weight','$price','$description','$images')";
    
    $query_run = mysqli_query($connection, $query);
    
    if(move_uploaded_file($_FILES['cake_image']['tmp_name'],$target))
        
        {
          header("location:addcakes.php?success");
        }
    else
        {
            header("location:addcakes.php?error");
        }
}

 


if(isset($_POST['addcakes_updatebtn']))
    
{
    $target ="uploads/".basename($_FILES['edit_image']['name']);
    
    $id= $_POST['edit_id'];
    
    $name = $_POST['edit_name'];
    $weight = $_POST['edit_weight'];
    $price = $_POST['edit_price'];
    $description = $_POST['edit_description'];
    
    $image = $_FILES['edit_image']['name'];
    
    
    
    $query = "UPDATE addcake SET name='$name', weight='$weight', price='$price', description='$description', image='$image' WHERE  id='$id' ";
    
    $query_run = mysqli_query($connection, $query);
    
    if(move_uploaded_file($_FILES['edit_image']['tmp_name'],$target))
        
    {
         $_SESSION['success'] = "Cake Updated ";
         header("location: addcakes.php?success");
    }
       else
       {
         $_SESSION['status'] = "Cake Not Updated ";
         header("location: addcakes.php?error");
       }
         
}

       
       
       
       

include('dbconfig.php');


if(isset($_POST['addcake_delete_btn']))
{
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM addcake WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
       $_SESSION['success'] = "cake is deleted";
       header("location: addcakes.php");
    }
    else
    {
        $_SESSION['status'] = "cake is not deleted";
        header("location: addcakes.php");
    }
}





if(isset($_POST['save_cup_cake']))
    
{
    $target ="uploads/".basename($_FILES['cup_cake_image']['name']);
    
    
    $name = $_POST['cup_cake_name'];
    $price = $_POST['cup_cake_price'];
    $description = $_POST['cup_cake_description'];
    $images = $_FILES['cup_cake_image']['name'];
    
    
    
    $query ="INSERT INTO `addcupcake`(name,price,description,image) VALUES ('$name','$price','$description','$images')";
    
    $query_run = mysqli_query($connection, $query);
    
    if(move_uploaded_file($_FILES['cup_cake_image']['tmp_name'],$target))
        
        {
          header("location:addcupcake.php?success");
        }
    else
        {
            header("location:addcupcake.php?error");
        }
}




if(isset($_POST['addcupcakes_updatebtn']))
    
{
    $target ="uploads/".basename($_FILES['edit_cimage']['name']);
    
    $id= $_POST['editcc_id'];
    
    $name = $_POST['edit_cname'];
    $price = $_POST['edit_cprice'];
    $description = $_POST['edit_cdescription'];  
    $image = $_FILES['edit_cimage']['name'];
    
    
    
    $query = "UPDATE addcupcake SET name='$name', price='$price', description='$description', image='$image' WHERE  id='$id' ";
    
    $query_run = mysqli_query($connection, $query);
    
    if(move_uploaded_file($_FILES['edit_cimage']['tmp_name'],$target))
        
    {
         $_SESSION['success'] = "Cake Updated ";
         header("location: addcupcake.php?success");
    }
       else
       {
         $_SESSION['status'] = "Cake Not Updated ";
         header("location: addcupcake.php?error");
       }
         
}

     


include('dbconfig.php');


if(isset($_POST['addcupcake_delete_btn']))
{
    $id = $_POST['deletec_id'];
    
    $query = "DELETE FROM addcupcake WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
       $_SESSION['success'] = "cake is deleted";
       header("location: addcupcake.php");
    }
    else
    {
        $_SESSION['status'] = "cake is not deleted";
        header("location: addcupcake.php");
    }
}

















?>
