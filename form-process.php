<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
</head>

<body>


<?php
 
$youremail = "alphauk101@hotmail.com";
 
@extract($_POST);
$name = filter_var($name, FILTER_SANITIZE_STRING);
$msg  = filter_var($msg, FILTER_SANITIZE_STRING);
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (mail($youremail, 'Enquiry from Buzzband website.', $msg, "From: <$email>")) {
        echo "Your email was sent to The Buzzband. Thank you $name, for your enquiry.";
 
        $autoreply = "Thank you for your email";
        $subject   = "Thank you for your submission!";
        mail($email, $subject, $autoreply, "From: The Buzzband - Email Confirmation<$email>");
 
    }
} else {
    echo "Please enter a valid email address";
}
?>

</body>
</html>