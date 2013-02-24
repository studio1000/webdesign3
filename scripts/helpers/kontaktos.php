<?php
$to   = 'tamir.kuhr@gmail.com';

$sent = 'notsent';
if (isset($_REQUEST['virksomhedens']) && isset($_REQUEST['cvr']) && isset($_REQUEST['contact'])&& isset($_REQUEST['phone']) && isset($_REQUEST['email'])) 
{    
    $virksomhedens = $_REQUEST['virksomhedens'];
    $cvr = $_REQUEST['cvr'];
    $contact = $_REQUEST['contact'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['message'];
    
    $subject = 'Kontakt os ['.$email.']';
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message ="<html><head><title>$subject</title></head><body>";
    $message .= "<strong>Virksomhedens navn: </strong>".$virksomhedens."<br/><br/>";
    $message .= "<strong>CVR nr: </strong>".$cvr."<br/><br/>";
    $message .= "<strong>Kontaktperson: </strong>".$contact."<br/><br/>";
    $message .= "<strong>Telefonnummer: </strong>".$phone."<br/><br/>";
    $message .= "<strong>E-mail: </strong>".$email."<br/><br/>";
    $message .= "<strong>Eventuel besked: </strong>"."<br/><br/>".nl2br($msg);
    $message .= "</body></html>";
    mail($to, $subject, $message, $headers);
    $sent = 'sent';
}
?>