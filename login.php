<?php

/*session_start();*/
 $conn = mysqli_connect("localhost","root","");
        
 $db = mysqli_select_db($conn, "cake");

if(isset($_POST['submit'])){
    if(empty($_POST['email'])|| empty($_POST['pass'])){
        
    }
    else
    {
        $user=$_POST['email'];
        $pass=$_POST['pass'];

        $query = mysqli_query($conn, "SELECT * FROM `signin` WHERE password='$pass' AND email='$user'");
        
        
        $row = mysqli_num_rows($query);
        if($row == 1){
            header("location:home.php");
        
        }
        else
        {
            header("location:login.php?error");
        }
        mysqli_close($conn);
    
    }
}

?>
<html>
    <head>
        <?php
            include_once("include/header.php");
        ?>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
    <?php
        include_once("include/nav-bar.php");
    ?>
    <br><br>
    <div class="container">
        <div class="login-form">
            <br><br>
            <h1>Login</h1>
            <br><br>
            <form action="login.php" method="post">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="email">E-mail : </label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <label for="password">Password : </label>
                    <input type="password" id="passwordS" name="pass">
                </div>
                <center><a href="home.html"></a> <input type="Submit" value="Login" name="submit"></center>
                
                <a href="signinp.php"><br> Create an Account? </a>
            </form>
        </div>
    </div>
    <br><br>
    <?php
        include_once("include/footer.php");
        include_once("include/scripts.php");
    ?>
    </body>
</html>
