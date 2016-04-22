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
    <title>Restaurants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Resort">
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
                <li><a href="facilitiesu.php">Facilities</a></li>
                <li><a href="#">Restaurant</a></li>
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
