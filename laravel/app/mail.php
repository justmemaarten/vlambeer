<?php
/**
 * Created by PhpStorm.
 * User: Leijten
 * Date: 15-1-2016
 * Time: 11:09
 */

if($_POST["message"]) {
    mail("jeroenstamkot@me.com", "Form to email message", $_POST["message"], "From: an@email.address");
}



if($_POST["submit"]) {
    $recipient="jeroenstamkot@me.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>