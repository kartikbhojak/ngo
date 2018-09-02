<?php 
session_start();
$_SESSION['message']='';
$conn=mysqli_connect('localhost','root','','miniproject');

if(!$conn)
{
    die('couldnot connect'.mysqli_connect_error());
}

 if(isset($_POST['log']))
 {
 
  $em=$_POST['email'];

  $pass=$_POST['password'];

  $query=mysqli_query($conn,"select * from registration where Email='$em' && Password='".md5($pass)."' && status='approve'");

  $sel_id=mysqli_query($conn,"select ngo_id from registration where Email='$em' && Password='".md5($pass)."'");




  $num=mysqli_num_rows($query);

  if($num==1)
  {
    $_SESSION['ngouser']=$em;
    $_SESSION['ngopass']=$pass;
   $_SESSION['message']="Login successful";

     $row=mysqli_fetch_assoc($sel_id);
  $_SESSION['id']=$row["ngo_id"];

   header("refresh:2; url=panel.php");


  }

 else
 {

  $_SESSION['message']=" Incorrect details..Log-in again";
 }

}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="reg.css">
<title>Login</title>
  </head>

<body>

<?php
include('simplenav.php');
?>

<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          
          <div class="tab-pane fade active in" id="login">
                    <form id="login" method="post">
                    <div class="alert alert-error"><?=$_SESSION['message']?></div>
                    <div class="form-group">
                    <label>Email<span class="req">*</span> </label>
                    <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                    <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                    <label> Password<span class="req">*</span> </label>
                    <input type="password" name="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                    </div>
                    <div class="mrgn-30-top">
                    <button type="submit" name="log" class="btn btn-larger btn-block"/>
                    Log in
                    </button>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>
<script>
    

$(document).ready(function(){

$('#form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
            if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight'); 
            } else {
            label.removeClass('highlight');   
            }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
            label.removeClass('highlight'); 
            } 
      else if( $this.val() !== '' ) {
            label.addClass('highlight');
            }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(800);
  
});

});

</script>
</body>
</html>