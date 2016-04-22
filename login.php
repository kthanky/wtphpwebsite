<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "website";
$LogErr="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = test_input($_POST["email"]);
    $pwd = test_input($_POST["pwd"]);
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        $LogErr   = "Error In Server Try Again";
    }
    $sql = "SELECT * FROM users where Pass='" . md5($pwd) . "' and Email='" . $email . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $_SESSION['username']=$row["Email"];
        $_SESSION['logged_in']=true;
        header('Location:user.php');
    }
    else
    {
        $LogErr  = "Incorrect Details...Try Again";
        echo
        "<script type=\"text/javascript\">
            alert(\"Incorrect Details...Try Again\");
            </script>";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>