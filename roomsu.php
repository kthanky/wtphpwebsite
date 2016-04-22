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
    <title>Rooms</title>
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
                <li><a href="#">Rooms</a></li>
                <li><a href="facilitiesu.php">Facilities</a></li>
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
        <h3>Types Of Rooms</h3>
        <div class="room-grids">
            <div class="col-md-4 room-sec">
                <img src="images/room1.jpg" height="220" width="150" alt="Economy"/>
                <h4>Economoy</h4>
                <p>All Basic Amentities in the most affordable prices</p>
            </div>
            <div class="col-md-4 room-sec">
                <img src="images/room2.jpg" height="220" width="150" alt="Deluxe"/>
                <h4>Deluxe</h4>
                <p>Advanced Amentities in a pocket friendly prices</p>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 room-sec">
                <img src="images/room3.jpg" height="220" width="150" alt="Business"/>
                <h4>Business</h4>
                <p>A room for all the business people with conference room facilities.</p>
            </div>
            <div class="col-md-4 room-sec">
                <img src="images/room4.jpg" height="220" width="150" alt="Suite"/>
                <h4>Suite</h4>
                <p>The Heaven on Earth itself with access to all amentites on resort.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
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
