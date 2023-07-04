<html>
<head>

    <?php
    include_once("include/header.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>

<body>

<?php
include_once("include/nav-bar.php");
?>


<br>
<div class="container">
    <div class="form">
        <div class="design">
            <br>
            <h1><b><i> Create Your Dream Cake !</i></b></h1><br>

            <form action="price.php" method="post">

                <?php

                if (isset($_GET['success'])) {
                    echo '<div class="alert" style="background-color:green"><center><b> Form success fully submited !</b></center></div>';
                }
                if (isset($_GET['error'])) {
                    echo '<div class="alert" style="background-color:white"><center><b> form not submited !</b></center></div>';
                }
                ?>


                <div class="form-group">
                    <label for="fname">Full Name:</label>
                    <input type="text" name="fname" id="fname">
                </div>

                <div class="form-group">
                    <label for="email">E-mail : </label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="number">Contact Number :</label>
                    <input type="number" name="number" id="number">
                </div>
                <div class="form-group">
                    <label for="">Date required :</label>
                    <input type="date" name="date" id="date">
                    <script type='text/javascript'>
                        $(function () {
                            $('#calendar').fullCalendar({
                                theme: true,
                                header: {
                                    left: '',
                                    center: '',
                                    right: ''
                                },
                                defaultView: 'agendaDay',
                                editable: false,
                                events: "../fullcalendar/JSONcreator"
                            });
                            $('#datepicker').datepicker({
                                inline: true,
                                onSelect: function (dateText, inst) {
                                    var d = new Date(dateText);
                                    $('#calendar').fullCalendar('gotoDate', d);
                                }
                            });
                        })
                    </script>

                    <div class="form-group">
                        <label>weight :</label>
                        <select id="weight" class="select" name="weight" onchange="setFlavour(this.value)">
                            <option value="1kg">1 KG</option>
                            <option value="1.5kg">1.5 KG</option>
                            <option value="2kg">2 KG</option>
                            <option value="3kg">3 KG</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Flavour : </label>
                    <select id="flavour" class="select" name="flavour">
                        <option value="vanila">Vanila</option>
                        <option value="chocolate">Chocolate</option>
                        <option value="stewberry">Stewberry</option>
                        <option value="rainbow">Rainbow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Filling : </label>
                    <select id="filling" class="select" name="filling">
                        <option value="va">Vanila</option>
                        <option value="ch">Chocolate</option>
                        <option value="st">Stewberry</option>
                        <option value="ra">Rainbow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Icing : </label>
                    <select id="icing" class="select" name="icing">
                        <option value="vani">Vanila</option>
                        <option value="cho">Chocolate</option>
                        <option value="strew">Stewberry</option>
                        <option value="rain">Rainbow</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Eggless : </label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="eggless" value="yes">Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="eggless" value="no">No
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Theme of Cake : </label><br>
                    <input type="file" id="theme_cake" name="theme_cake">

                </div>
                <form action="price.php" method="post">
                    <div class="form-group">
                        <label for="">Price :</label>
                        <input type="number" name="price" id="price">
                        <h6> Price can be changed your selections</h6>
                    </div>
                </form>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <textarea rows="5" id="subject" name="subject"
                              placeholder="Write Something about your idea..."></textarea>
                </div>
                <br><br>
                <button type="submit" name="submit" id="submit" value="send">Submit</button>
            </form>
        </div>
        <br><br>
    </div>
</div>
<br>
<?php
include_once("include/footer.php");
include_once("include/scripts.php");
?>
</body>
</html>
