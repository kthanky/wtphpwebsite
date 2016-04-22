<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Connection: close");
if(isset($_POST['book_submit']))
    require_once('bookroom.php');
if($_SESSION['logged_in'])
{
?>
    <html>
    <head>
        <title>User</title>
        <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type='text/javascript' src='js/script.js'></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
            window.onhashchange=function(){window.location.hash="no-back-button";}
        </script>
    </head>
    <body style="background-image:url('images\rooms.jpg');">
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="aboutusu.php">About Us</a></li>
                    <li><a href="roomsu.php">Rooms</a></li>
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
    <div class="rooms">
        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <div class="well" style="background-color:#333333;color:white;">
                        <p style="font-family:Pinyon Script;font-size:30px;">Latest News</p>
                    </div>
                    <div style="font-family:cookie;font-size:30px;">
                        <div class="well">
                            <p>Voted as Best Resort</p>
                        </div>
                        <div class="well">
                            <p>Food Festival</p>
                        </div>
                        <div class="well">
                            <p>Climate Conference</p>
                        </div>
                        <div class="well">
                            <p>Chelsea FC Visits</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <h1 style="font-family:Pinyon Script;text-align:center;font-size:50px;">Welcome</h1>
                        <p style="font-family:cookie;text-align:justify;font-size:30px;">It is an honour having you as a part of our family,with this account you will have the prestige of doing all your bookings online,availing special discounts and getting all the latest news about resort.</p>
                    </div>
                    <br><br>
                    <div class="col-sm-8"style="background-color:#333333;overflow:auto;margin-bottom:30px;margin-top:30px;">
                        <br>
                        <h1 style="font-family:Pinyon Script;text-align:left;font-size:30px;font-weight:bold;color:white;">Book Room</h1>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" width="100%" style="text-align:center;" method="POST">
                            <input type="date" id="checkin" name="checkin" placeholder="Check In Date" required>
                            <input type="date" id="checkout" name="checkout" placeholder="Check Out Date" required>
                            <input type="number" name="days" placeholder="Days" min=1 style="width:150px;" required>
                            <input type="number" name="members" placeholder="Members" style="width:150px;" min=1 max=3 required>
                            <select name="room" style="height:27px; width:150px;" required>
                                <option name="t1">Economy</option>
                                <option name="t2">Deluxe</option>
                                <option name="t3">Business</option>
                                <option name="t4">Suite</option>
                            </select>
                            <input type="submit" name="book_submit" value="Book" style="width:150px;height:29px;">
                    </div>
                    <br><br><br>
                    <div class="col-sm-8"style="background-color:white;overflow:auto;font-family:cookie;font-size:25px;">
                        <div class="col-sm-6">
                            <div class="well">
                                <p>Economy:2000 rs/night</p>
                            </div>
                            <div class="well">
                                <p>Deluxe:4000 rs/night</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="well">
                                <p>Business:8000 rs/night</p>
                            </div>
                            <div class="well">
                                <p>Suite:10,000 rs/night</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>Kunal Mukesh Thanki</p>
    </footer>

    </body>
    </html>
<?php
    }
    else
        header('Location:index.php');
?>
