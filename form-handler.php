<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'marco.bognar@ost.ch';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name./n"
                "User Mail: $visitor_email./n"
                    "Subject: $subject./n"
                        "Message: $message./n";

$to = 'marco.bognar@ost.ch';

$headers = "From: $email_from /r/n";

$headers .= "Reply-To: $visitor_email /r/n";

mail($to,$email_subject, $email_body);

header("Location: contact.html");

?>