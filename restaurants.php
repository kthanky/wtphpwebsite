<html>
<head>
    <?php
    if(!empty($_POST['login-submit']))
    {
        require_once('login.php');
        $SignUpErr="";
    }
    else if(!empty($_POST['signup-submit']))
    {
        require_once('register.php');
        $LogErr="";
    }
    else{
        $LogErr="";
        $SignUpErr="";
    }
    ?>
    <title>Restaurants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Resort">
    <meta name="author" content="Kunal Mukesh Thanki">
    <!-- Bootstrap Files-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet' type='text/css'>
    <!-- End of Bootstrap Files-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
                    <li><a href="#">Restaurants</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
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
        <!-- Main Body -->
        <div class="rooms text-center">
            <div class="container">
                <h3>Our Restaurants</h3>
                <div class="room-grids">
                    <div class="col-md-4 room-sec">
                        <img src="images/pic1.jpg" height="220" width="150" alt="Bardo"/>
                        <h4>Bardo Restaurant</h4>
                        <p>Authenticate Kathiyawadi Food and the tagline goes "When you are here, you are Family"</p>
                    </div>
                    <div class="col-md-4 room-sec">
                        <img src="images/pic2.jpg" height="220" width="150" alt="Planet Sports"/>
                        <h4>Planet Sports</h4>
                        <p>Best Street Food from across the Planet,Sports Pub and the tagline goes "Yours Truly, For AM & PM people"</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 room-sec">
                        <img src="images/pic4.jpg" height="220" width="150" alt="Experience India"/>
                        <h4>Experience India</h4>
                        <p>Most Authentic Indian Cuisine from J&K to Kerala and tagline goes "Come hungry, Leave happy."</p>
                    </div>
                    <div class="col-md-4 room-sec">
                        <img src="images/pic5.jpg" height="220" width="150" alt="World Tour"/>
                        <h4>World Tour</h4>
                        <p>Most Authentic famous dishes from cuisines across world and tagline goes "Life is Too Short For Average Food!"</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Body Ends -->
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
        <footer class="container-fluid text-center" style="position: relative;">
            <p>Kunal Mukesh Thanki</p>
        </footer>
</body>
</html>