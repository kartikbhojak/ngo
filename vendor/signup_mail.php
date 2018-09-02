<?php
session_start();
$_SESSION['message']='';

$mysqli=mysqli_connect('localhost','root','','miniproject');
if(!$mysqli)
{
    die('couldnot connect'.mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST['password']==$_POST['confirmpassword'])
    {
    if(isset($_POST['submit']))
    {
        $ngo_name=$mysqli->real_escape_string($_POST['ngo_name']);
        $ngoid=$mysqli->real_escape_string($_POST['ngoid']);
        $email=$mysqli->real_escape_string($_POST['email']);
        $phone=$mysqli->real_escape_string($_POST['phone']);
        $address=$mysqli->real_escape_string($_POST['address']);
        $locality=$mysqli->real_escape_string($_POST['locality']);
        $achievements=$mysqli->real_escape_string($_POST['achievements']);
        $password=md5($_POST['password']);
        $confirmpassword=md5($_POST['confirmpassword']);
              echo $ngoid;
        $sql=mysqli_query($mysqli,"INSERT INTO registration(NGO_name,ngo_id,Email,Phone,address,Area,achievements,Password,Confirm_Password,status)VALUES('$ngo_name','$ngoid','$email','$phone','$address','$locality','$achievements','$password','$confirmpassword','pending')");
        
        if ($sql) 
        {
            
            $_SESSION['message']="Registration Successful";
            header("refresh:3; url=/mini-project/login.php");
        }
        else
        {
           
            $_SESSION['message']="Registration Unsuccessful";
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }
    }
  else
    {
        $_SESSION['message']="Passwords do not match!";
    }
}
session_destroy();
mysqli_close($mysqli);
?>


<?php
if(isset($_POST['submit']))
{
ini_set('display_errors', 1);

require 'autoload.php';
require 'class.phpmailer.php';
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
$mail->addAddress($_POST['email'],$_POST['ngo_name']);
$mail->AddCC('kushagra.jaiswal18@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'WebX NGO signup verification mail';
$mail->Body = 'Thank You for registering with WebX NGO. You wil be notified once you will be verified.';
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
}
else
{
echo "not send";
}
?>
