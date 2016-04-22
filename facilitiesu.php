<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Connection: close");
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
if($_SESSION['logged_in'])
{
?>
<html>
<head>
    <title>Facilities</title>
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
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
                <li><a href="user.php">Home</a></li>
                <li><a href="aboutusu.php">About Us</a></li>
                <li><a href="roomsu.php">Rooms</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="restaurantsu.php">Restaurant</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="rooms text-center">
    <div class="container">
        <h3>Facilities</h3>
        <div class="room-grids">
            <div class="col-md-4 room-sec">
                <img src="images/service1.jpg" height="220" width="150" alt="Adventure Sports"/>
                <h4>Adventure Sports</h4>
                <p>All amazing adventure sports activities which will give you a thrill you can't miss.</p>
            </div>
            <div class="col-md-4 room-sec">
                <img src="images/services2.jpeg" height="220" width="150" alt="Swimming Pool"/>
                <h4>Swimming Pool</h4>
                <p>A Swimming Pool to give your water buds a adrenaline rush.</p>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 room-sec">
                <img src="images/service3.jpg" height="220" width="150" alt="Wellness center"/>
                <h4>Wellness Center</h4>
                <p>A Wellness Center to give you feel of heaven on earth.</p>
            </div>
            <div class="col-md-4 room-sec">
                <img src="images/service4.jpg" height="220" width="150" alt="Theatre"/>
                <h4>Theatre</h4>
                <p>For all the movie Buds out there a huge theatre with best in class sound system.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="col-md-3 packages-grid">
                <div class="packages-grid1">
                    <img src="images/service5.jpg" height="220" width="220" alt=""/>
                </div><br>
                <h4>Gym and Fitness</h4>
            </div>
            <div class="col-md-3 packages-grid">
                <div class="packages-grid1">
                    <img src="images/services6.png" height="220" width="220" alt="Wi-Fi"/>
                </div><br>
                <h4>Wi-Fi</h4>
            </div>
            <div class="col-md-3 packages-grid">
                <div class="packages-grid1">
                    <img src="images/services7.jpg"  height="220" width="220" alt="First-Aid"/>
                </div><br>
                <h4>First-Aid</h4>
            </div>
            <div class="col-md-3 packages-grid">
                <div class="packages-grid1">
                    <img src="images/service8.jpg"  height="220" width="220" alt=""/>
                </div><br>
                <h4>Security</h4>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Main Body Ends -->
<footer class="container-fluid text-center" style="position: relative;">
    <p>Kunal Mukesh Thanki</p>
</footer>
</body>
</html>
<?php
}
else
    header('Location:index.php');
?>
