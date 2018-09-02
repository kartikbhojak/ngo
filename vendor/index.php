<?php
if(isset($_POST['submit']))
{
ini_set('display_errors', 1);

require 'autoload.php';
require 'class.phpmailer.php';
//require 'class.smtp.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 4; 
$mail->IsSMTP(); 
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;  
$mail->Username = "rishabhgoel9797@gmail.com";                 
$mail->Password = "Computer@123";
//$mail->SetLanguage("en", 'language');
$mail->Mailer = "smtp";                            
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 


//$mail->setFrom("rishabhgoel9797@gmail.com");
$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('rishabhgoel9797@gmail.com','Rishabh Goel');

$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['msg-body'];
$mail->AltBody = 'This is the plain text version of the email content.';
/*try{
        $mail->Send();
        echo "Thanks. Bug report successfully sent.
              We will get in touch if we have any more questions!";
    } catch(Exception $e){
        //Something went bad
        echo "Mailer Error: - " . $mail->ErrorInfo;
    }*/
   if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        
    } 
    else {
        header('Location: /mini-project/redirect.php');
exit;
    }
}
else
{
echo "not send";
}
?>
