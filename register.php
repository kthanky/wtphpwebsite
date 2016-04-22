<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "website";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$SignUpErr="";
$flag=0;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = test_input($_POST['fname']);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $SignUpErr = "Only letters and white space allowed in Name Field";
        $flag=1;
    }
    $contact =test_input($_POST['contact']);
    if (!preg_match("/^[0-9]*$/",$contact)) {
        $SignUpErr = "Only numbers allowed In Contacts Field";
        $flag=1;
    }
    $add1 = test_input($_POST['add1']);
    $add2 = test_input($_POST['add2']);
    $pin = test_input($_POST['pin']);
    $country = test_input($_POST['country']);
    if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
        $SignUpErr = "Only letters and white space allowed in Country Field";
        $flag=1;
    }
    $city = test_input($_POST['city']);
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
        $SignUpErr = "Only letters and white space allowed in City Field";
        $flag=1;
    }
    $email = test_input($_POST['mail']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $SignUpErr= "Invalid email format";
        $flag=1;
    }
    $pwd = md5(test_input($_POST['passwd']));
    $repwd=md5(test_input($_POST['repwd']));
    if($pwd!=$repwd)
    {
        $SignUpErr="Both Passwords do not match";
        $flag=1;
    }
    if($flag==0)
    {
        $stmt = $conn->prepare("INSERT INTO users(FullName,Contact,Address1,Address2,Pin,City,Country,Email,Pass) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss", $fname, $contact, $add1, $add2, $pin, $city, $country, $email, $pwd);
        if ($stmt->execute() === TRUE)
        {
            $cmd='python2 sendmailuser.py';
            exec($cmd);
            echo
            "<script type=\"text/javascript\">
            alert(\"Registered...Check Your Email\");
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