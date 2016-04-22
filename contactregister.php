<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "website";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$CErr="";
$flag=0;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = test_input($_POST['userName']);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $CErr = "Only letters and white space allowed in Name Field";
        $flag=1;
    }
    $contact =test_input($_POST['userPhone']);
    if (!preg_match("/^[0-9]*$/",$contact)) {
        $CErr = "Only numbers allowed In Contacts Field";
        $flag=1;
    }
    $email = test_input($_POST['userEmail']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $CErr= "Invalid email format";
        $flag=1;
    }
    $msg = $_POST['userMsg'];
    if($flag==0)
    {
        $stmt = $conn->prepare("INSERT INTO contact(FullName,Contact,Email,Message) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $fname, $contact,$email, $msg);
        if ($stmt->execute() === TRUE)
        {
            $cmd='python2 sendmail.py';
            exec($cmd);
            echo "<script type=\"text/javascript\">
            alert(\"Thankyou! We will get back to you Soon!\");
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
            alert(\"Error In Input\");
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