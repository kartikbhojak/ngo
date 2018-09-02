<?php
include('connection.php');
$id=$_GET["id"];
$ngoemail=$_GET["ngoemail"];
mysqli_query($conn,"update registration set status='approve' where ngo_id='$id'");
?>

<?php
ini_set('display_errors', 1);

require 'vendor/autoload.php';
require 'vendor/class.phpmailer.php';
//require 'class.smtp.php';


$mail = new PHPMailer;

$mail->SMTPDebug = 4; 
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
$mail->setFrom('rishabhgoel9797@gmail.com','WebX NGO');
$mail->addAddress($ngoemail);
$mail->AddCC('kushagra.jaiswal18@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'WebX NGO signup verification mail';
$mail->Body = 'Thank You for registering with us. You have been successfully verified and you can login now to post your requirements.';
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
        echo "Message has been sent successfully";
    }

?>




<script type="text/javascript">
	window.location="admin.php";
</script>

