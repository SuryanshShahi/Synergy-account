<?php
ini_set('error_reporting',1);
$username = $_POST['name'];
$number = $_POST['tel'];
$email = $_POST['email'];
$msg = $_POST['message'];
$to = "azib.quantumit@gmail.com";
$subject = "Sweethill Leads";



$message = "
<html>
<head>
<title>Sweethill Leads</title>
</head>
<body>
<h3>Name: $username</h3>
<p><b>Phone:</b> $number</p>
<p><b>Email:</b> $email</p>
<p><b>Message:</b> $msg</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Reply-To: The Sender <contact@sweet-hill.com>\r\n";
 $headers .= "Return-Path: The Sender <citiconcretecompany@gmail.com>\r\n";
$headers .= "From: Sweethill <contact@sweet-hill.com>\r\n";

if (mail($to,$subject,$message,$headers))
{
    echo "<script>window.location='thank-you.php';</script>";
}
else
{
    echo "Error: Message not accepted";
}

?>