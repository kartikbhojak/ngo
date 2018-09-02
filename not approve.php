<?php
include('connection.php');
$id=$_GET["id"];
$ngoemail=$_GET["ngoemail"];
mysqli_query($conn,"delete from registration where ngo_id='$id'");
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
$mail->Body = 'Sorry After analysing your details we found that you are not a goverment verified NGO so you will not be able to login. Thank You.';
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