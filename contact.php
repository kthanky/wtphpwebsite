<html>
<head>
    <?php
    if(!empty($_POST['login-submit']))
    {
        require_once('login.php');
        $SignUpErr="";
        $CErr="";
    }
    else if(!empty($_POST['signup-submit']))
    {
        require_once('register.php');
        $LogErr = "";
        $CErr="";
    }
    else if(!empty($_POST['contact']))
    {
        require_once('contactregister.php');
        $LogErr="";
        $SignUpErr="";
    }
    else
    {
        $CErr="";
        $LogErr="";
        $SignUpErr="";
    }
    ?>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Resort">
    <meta name="author" content="Kunal Mukesh Thanki">
    <!-- Bootstrap Files-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <!-- End of Bootstrap Files-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- Static navbar -->
<div style="font-color:blue;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Angel's Dream Palace</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="restaurants.php">Restaurants</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button id="myBtn1" class="btn btn-sm" style="color:white;margin-top:10;margin-right:20;background-color:darkgrey;width:80;height:30;"><img src="images/s.png" height="20" width="20"></img>Sign Up</button></li>
                    <li><button id="myBtn" class="btn btn-sm" style="color:white;margin-top:10;background-color:darkgrey;width:80;height:30;"><img src="images/l.png" height="20" width="20"></img>Log In</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <center>
            <div style="width:300;height:300;margin-top:100">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close"></span>
                        <h2 style="font-family:comic sans MS;">Login Form</h2>
                    </div>
                    <div class="modal-body">
                        <form style="position:relative;margin-top:20;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <b><span class="error" style="color: red;"><?php echo $LogErr;?></span></b></span><br><br>
                            <input type="text" name="email" placeholder="Email" required><br><br>
                            <input type="password" name="pwd" placeholder="Password" required><br><br>
                            <input class="btn btn-primary"type="submit" value="Login" name="login-submit">
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <center>
        <div id="myModal1" class="modal">
            <center>
                <div style="width:300;height:300;margin-top:40;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close"></span>
                            <h2 style="font-family:comic sans MS;">Sign Up Form</h2>
                        </div>
                        <div class="modal-body">
                            <form style="position:relative;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                <b></b> <span class="error" style="color: red;"><?php echo $SignUpErr;?></span></b></span><br><br>
                                <input type="text" name="fname" placeholder="FullName" required><br><br>
                                <input type="text" name="contact" placeholder="Contact Number" required><br><br>
                                <input type="text" name="add1" placeholder=" House Name/Number" required><br><br>
                                <input type="text" name="add2" placeholder="Area/Street" required><br><br>
                                <input type="text" name="pin" placeholder="Pincode" required><br><br>
                                <input type="text" name="city" placeholder="City" required><br><br>
                                <input type="text" name="country" placeholder="Country" required><br><br>
                                <input type="text" name="mail" placeholder="Email" required><br><br>
                                <input type="password" name="passwd" onselectstart="return false" onpaste="return false;" autocomplete=off placeholder="Password" required><br><br>
                                <input type="password" name="repwd" onpaste="return false;" autocomplete=off placeholder=" Retype Password" required><br><br>
                                <input class="btn btn-primary"type="submit" value="Sign Up" name="signup-submit">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <!--Main Body-->
        <div class="contact-bg">
            <div class="container">
                <div class="contact-us">
                    <div class="contact-us_left">
                        <div class="contact-us_info">
                            <h3 class="style">Find Us Here</h3>
                            <div class="map">
                                <iframe style="height:175;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Angels+Resort,+Chogm+Road,+Alto+Porvorim,+Goa,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                            </div>
                        </div>
                        <div class="company_address">
                            <h3 class="style">Contact Details:</h3>
                            <p>Fulham Road Near Stamford Bridge,</p>
                            <p>Panji, Goa,</p>
                            <p>India</p>
                            <p>Phone:(+91)9510104059</p>
                            <p>Fax: (+91)2334123213</p>
                            <p>Email: <a href="#">Angel's Mail</a></p>
                            <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                        </div>
                    </div>
                    <div class="contact_right">
                        <div class="contact-form">
                            <h3 class="style">Contact Us</h3>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                <b><span class="error" style="color: red;"><?php echo $CErr;?></span></b></span><br><br>
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input name="userName" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="userEmail" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>MOBILE</label></span>
                                    <span><input name="userPhone" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>SUBJECT</label></span>
                                    <span><textarea name="userMsg"> </textarea></span>
                                </div>
                                <div>
                                    <input type="submit" value="submit us" name="contact">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--Main Body Ends-->
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');
            var modal1=document.getElementById('myModal1');
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
            var btn1=document.getElementById("myBtn1");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }
            btn1.onclick = function() {
                modal1.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
                modal1.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                if(event.target == modal1)
                {
                    modal1.style.display = "none";
                }
            }
        </script>
        <footer class="container-fluid text-center">
            <p>Kunal Mukesh Thanki</p>
        </footer>
</body>
</html>