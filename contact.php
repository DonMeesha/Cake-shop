<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];


    $mailTo = "kaushirameesha@gmail.com";
    $headers = "FROM : kaushirameesha@gmail.com";
    $txt = "You have received an e-mail(" . $emailFrom . ") from " . $name . ".\n\n" . $msg;

    mail($mailTo, $subject, $txt, $headers);

    if (mail($mailTo, $subject, $txt, $headers) == true) {
        $_SESSION['message'] = "Your mail Received!";
        $_SESSION['type'] = "Alert-success";

        header("location:contact.php?success");
    } else {
        $_SESSION['message'] = "Your mail Didn't Received!";
        $_SESSION['type'] = "Alert-danger";

        header("location:contact.php?error");
    }

}

?>

<html>


<head>
    <?php
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/contact.css">

</head>


<body>
<?php
include_once("include/nav-bar.php");
?>
<!---------------------------------------------------------ContactFrom----------------------------------------------------->
<br>
<br>

<div style="text-align:center">

</div>
<div class="row">
    <div class="container">

        <div class="containercontact">
            
                <h1>
                    <center>Send Us a Message</center>
                </h1>
                <br>
                <h5 class="text-center text-success"> <?php $message; ?></h5>

                <div class="row" style="height: 550px">
                    <div class="col-md-6 ">

                        <!--- <h4 class="sent-notification"> </h4>--->
                        <form action="contact.php" method="post">

                            <div class="form-group">
                                <label><b>
                                        <h4>Name</h4>
                                    </b></label>
                                <input type="text" name="name" id="name" placeholder="Your full name..">
                            </div>
                            <div class="form-group">

                                <label><b>
                                        <h4>E-mail</h4>
                                    </b></label>
                                <input type="text" name="email" id="email" placeholder="Email address..">
                            </div>
                            <div class="form-group">
                                <label><b>
                                        <h4>Subject</h4>
                                    </b></label>
                                <input type="text" name="subject" id="subject" placeholder="Enter subject">
                            </div>
                            <div class="form-group">
                                <label><b>
                                        <h4>Message</h4>
                                    </b></label>
                                <textarea name="msg" id="msg" placeholder="Write something..."
                                          style="height:170px"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" id="submit" value="Send">Submit</button>
                            </div>
                        </form>
                    </div>
<br>
                    <div class="col-md-6">


                        <div class="col-md-6 text">

                            <h4></h4><br><br>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <label><b>
                                    <h4>Address</h4>
                                </b></label>
                            <p>Doncaster,<br> Melbourne, Victoria,<br> Australia.</p>


                            <i class="fas fa-phone mt-4 fa-2x"></i>
                            <label><b>
                                    <h4>Telephone</h4>
                                </b></label>
                            <p>+61 426 155 549</p>


                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <label><b>
                                    <h4>E-mail</h4>
                                </b></label>
                            <p>shyamindij9@gmail.com</p>

                        </div>
                    </div>
                </div>
        
         </div>
</div>
    </div>
    <br>
    <br>

<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</body>

</html>
