<html>
<head>

    <?php
        include_once("include/header.php");
    ?>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <?php
        include_once("include/nav-bar.php");
    ?>
    <br><br>
    <br><br><br>
    <div class="container">
        <div class="login-form">
            <br><br>
            <form action="signin.php" method="post">
                <h1>Create your Account</h1>
                <br><br>
                <?php
            
if(isset($_GET['success']))
{
    echo'<div class="alert" style="background-color:green"><center><b> Signin Successfull!</b></center></div>';
}
if(isset($_GET['error']))
{
    echo'<div class="alert" style="background-color:white"><center><b> Invalid User Input!</b></center></div>';
}
if(isset($_GET['incorrect']))
{
    echo'<div class="alert" style="background-color:white"><center><b> password Do Not match!</b></center></div>';
}
            ?>

                <script>
                    if (typeof window.history.pushState == "fuction") {
                        window.history.pushState({
                            ,
                            "hide",
                            "signin.php"
                        })
                    }

                </script>


                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="uname">User Name : </label>
                    <input type="text" id="uname" name="username">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="email">E-mail : </label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <label for="password">Password : </label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <label for="password">Confirm Password : </label>
                    <input type="password" id="cpassword" name="cpassword">
                </div>
                <center> <input type="Submit" value="Sign In" name="submit"></center>
                <a href="login.html"></a>

            </form>
        </div>
    </div>

    <br><br><br>

<?php
    include_once("include/footer.php");
    include_once("include/scripts.php");
?>


</body>
