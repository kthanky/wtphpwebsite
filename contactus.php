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
    <?php
    if(!empty($_POST['contact']))
    {
    require_once('contactregister.php');
    }
    else
        $CErr="";
    ?>
    <title>Contact Us</title>
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
                <li><a href="facilitiesu.php">Facilities</a></li>
                <li><a href="restaurantsu.php">Restaurant</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
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
</body>
</html>
<?php
}
else
    header('Location:index.php');
?>
