<?php
/**
 * Created by PhpStorm.
 * User: Leijten
 * Date: 15-1-2016
 * Time: 11:09
 */

//CODE FOR AUTOMATED MAIL SENDING
//
if(isset($_POST['button_pressed']))
{
    $to      = 'jeroenstamkot@me.com';
    $subject = 'Auto made subject';
    $message = $_POST['message'];
    $headers = Auth::user()->email . "\r\n" .
        Auth::user()->email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}


?>
    <script>
        function sendemail()
        {
            var url = '/mail.php';

            new Ajax.Request(url,{
                    onComplete:function(transport)
                    {
                        var feedback = transport.responseText.evalJSON();
                        if(feedback.result==0)
                            alert('There was a problem sending the email, please try again.');
                    }
                });

        }
    </script>

<?php
//
//if($_POST["message"]) {
//    mail("jeroenstamkot@me.com", "Form to email message", $_POST["message"], "From: an@email.address");
//}
//
//
//
//if($_POST["submit"]) {
//    $recipient="jeroenstamkot@me.com";
//    $subject="Form to email message";
//    $sender=$_POST["sender"];
//    $senderEmail=$_POST["senderEmail"];
//    $message=$_POST["message"];
//
//    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
//
//    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
//
//    $thankYou="<p>Thank you! Your message has been sent.</p>";
//}
//
//?>