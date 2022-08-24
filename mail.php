<?php
ini_set('error_reporting',1);
$username = $_POST['name'];
$number = $_POST['tel'];
$email = $_POST['email'];
$msg = $_POST['message'];
$to = "Synergyshred@gmail.com , shefali.quantum@gmail.com ";
$subject = "Synergy Shred";



$message = "
<html>
<head>
<title>Synergy Shred</title>
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
$headers .= "Reply-To: The Sender <Synergyshred@gmail.com>\r\n";
 $headers .= "Return-Path: The Sender <Synergyshred@gmail.com>\r\n";
$headers .= "From: SynergyShred <Synergyshred@gmail.com>\r\n";

if (mail($to,$subject,$message,$headers))
{
    echo "<script>window.location='thank-you.php';</script>";
}
else
{
    echo "Error: Message not accepted";
}

?>