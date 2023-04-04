<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email{

    private $hostname =  'server201.web-hosting.com';
    private $accountUserName = 'info@eyanney.com';
    private $accountpassword = 'thereisnopassword';
    private $portNumber = 465;
    private $smtp = "ssl";

    public function contactEmail(array $input){

        $mail = new PHPMailer(true);
    
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                
        $mail->isSMTP();                                   
        $mail->Host       =  $this->hostname;                  
        $mail->SMTPAuth   = true;                                  
        $mail->Username   =  $this->accountUserName;                 
        $mail->Password   =  $this->accountpassword;                 
        $mail->SMTPSecure = $this->smtp;            
        $mail->Port       = $this->portNumber;                        
        //Recipients
        $mail->setFrom($this->accountUserName);
        $mail->addAddress($this->accountUserName);


        //Content   
        $mail->isHTML(true);   
        $mail->Subject = $input['subject'];
        $mail->Body    = 'From: '.$input['name'].'<br>';
         $mail->Body    .= 'Email: '.$input['email'].'<br>';
        $mail->Body    .= 'subject: '.$input['subject'].'<br>';
        $mail->Body    .= 'Message: '.$input['message'].'<br>';
    
        $mail->send();
        return true;
    } catch (Exception $e) {

        return false;
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
        
    }





}