<?php

use PHPMailer\PHPMailer\PHPMailer;


/**
 * this model, used for all of service email.
 */
class EmailModel
{
    public function sendEmail($email)
    {
        $mail = new PHPMailer();
        //Enable SMTP debugging. 
        $mail->SMTPDebug = 0;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password     
        $mail->Username = "noreply@next-g.website";
        $mail->Password = "51n4r54kt1";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";
        //Set TCP port to connect to 
        $mail->Port = 587;

        $mail->From = "noreply@next-g.website";
        $mail->FromName = "rw05bgmpik";

        $mail->addAddress($email, $email);

        $mail->isHTML(true);

        $mail->Subject = "HI, ";
        $mail->Body = "testtest";    
        $mail->send();
    }
}
