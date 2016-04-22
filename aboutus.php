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
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Resort">
    <meta name="author" content="Kunal Mukesh Thanki">
    <!-- Bootstrap Files-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
    <!-- End of Bootstrap Files-->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <style>
        .container{
            background-color:white;
            font-family:cookie;
            font-size:20px;
        }
        .container h3{
            text-align:center;
            font-family:Pinyon script;
            font-size:40px;
        }
        .container h4{
            text-align:center;
            font-size:30px;
        }
        .container p{
            text-align:justify;
        }
        .why-choose .container{
            background-color:#333333;
            color:white;
        }
    </style>
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
                    <li><a href="#">About Us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="restaurants.php">Restaurants</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button id="myBtn1" class="btn btn-sm" style="color:white;margin-top:10;margin-right:20;background-color:darkgrey;width:80;height:30;"><img src="images/s.png" height="20" width="20"></img>Sign Up</button></li>
                    <li><button id="myBtn" class="btn btn-sm" style="color:white;margin-top:10;background-color:darkgrey;width:80;height:30;"><img src="images/l.png" height="20" width="20"></img>Log In</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--about-->
    <div class="content">
        <div class="container">
            <h3>About us</h3>
            <img src="images/about1.jpg" height="40%" width="100%" alt="/">
            <h4>"Come experience Heaven on planet Earth"</h4>
            <p>Quintessentially Indian in its fabric, Angel Dream Palace is recognized the world over for delivering a unique flavour of hospitality that offers world-class refinement while remaining deeply rooted in its local heritage. With over 100 rooms, We offer guests the refined luxury of heritage, the effortlessly efficient service and amenities and a local experience with the assurance of quality.</p>
        </div>
        <br><br>
        <!--about-->
        <!--why-choose-->
        <div class="why-choose">
            <div class="container">
                <h3>Awards & Recognitions</h3>
                <div class="col-md-4">
                    <h4>1. Best Resort in India</h4>
                    <p>We have been awarded the prestigious honor of being the best resort in India.</p>

                </div>
                <div class="col-md-4">
                    <h4>2. Best Resort in World</h4>
                    <p>We have been awarded the prestigious honor of being the best resort in World.</p>

                </div>
                <div class="col-md-4">
                    <h4>3. Entertainment Adda</h4>
                    <p>We won the award of being the entertainment adda for people of all age group.</p>

                </div>
            </div>
        </div>
        <br><br>
        <!--why choose-->
        <!--What We Offer?-->
        <div class="whatweoffer">
            <div class="container">
                <h3>What We Offer</h3>
                <div class="offer-grids">
                    <div class="col-md-7">
                        <h4>Comfort with a price which pleases the pocket</h4>
                        <p>Angel Dream Palace is synonymous the world over with providing the right blend of service, luxury and quiet efficiency. Internationally acclaimed for all-round excellence and unparalleled levels of service, and a touch of traditional authenticity we offer a full package to our guests in a price they cant say no to.</p>
                        <p>We care for people so they can be their best. We continuously listen, learn and evolve to both meet and anticipate the needs of our guests. We believe that being your best is about being your true self - engaged, fulfilled and ready to take on the world.</p>
                    </div>
                    <div class="col-md-5">
                        <h4>Comfort</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                            </div>
                        </div>
                        <h4>Cleanliness</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <h4>Entertainment</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                            </div>
                        </div>
                        <h4>Price Value</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--What We Offer?-->
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