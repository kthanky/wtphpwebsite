<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "website";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$flag=0;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $days =$_POST['days'];
    $members=$_POST['members'];
    $room =$_POST['room'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $email=$_SESSION['username'];
    $stmt = $conn->prepare("INSERT INTO bookings(roomtype,email,checkin,checkout,members,days) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssii", $room,$email,$checkin,$checkout,$members,$days);
        if ($stmt->execute() === TRUE)
        {
            $cmd='python2 sendmailbookings.py';
            exec($cmd);
            echo "<script type=\"text/javascript\">
            alert(\"Thankyou! We hope to see you Soon!\");
            </script>";
        }
        else
        {
            echo
            "<script type=\"text/javascript\">
            alert(\"Error In Server try again\");
            </script>";
        }
}
else
{
    echo
    "<script type=\"text/javascript\">
            alert(\"Error In Server try again\");
            </script>";
}
?>