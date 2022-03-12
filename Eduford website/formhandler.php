<?php
$name = $_POST["name"];
$visitor_email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST['message'];

$email_from="info@Eduford.com";

$email_subject= "New Form Submission ";

$email_body    ="User Name: $name /n".
                 "User email: $visitor_email /n".
                "User Subject: $subject/n".
                "User message: $message/n" ;

$to = "Hasnatraja1100@gmail.com";

$headers= "From: $email_from /r/n";

$headers.="Reply-To: $visitor_email /r/n";

mail($to,$subject,$email_body,$headers);
header("Location: contact.html");



?>