<?php
$email = $_POST["emailaddress"];
$to = "apondihazel|@gmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: apondihazel@gmail.com\n";
$usermessage = "Thank you for subscribing to my mailing list.";
mail($to, $subject, $message,$headers);
mail($user, $usersubject, $usermessage, $userheaders);
?>



/*
<?php

    $to = "apondihazel@gmail.com";
    $from = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
*/