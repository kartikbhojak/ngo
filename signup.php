<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="reg.css">
<title>Sign Up</title>
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
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <form id="signup" method="post" action="vendor/signup_mail.php">
               <div class="alert alert-error"><?=$_SESSION['message']?></div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label>NGO Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" id="ngo_name" name="ngo_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label>NGO ID-5 characters<span class="req">*</span> </label>
                    <input type="text" pattern="[a-zA-Z0-9]{5}" class="form-control" id="ngoid" name="ngoid" required data-validation-required-message="Please enter your NGO Id of 5 characters." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div> 
              </div>
              <div class="form-group">
                <label>Email<span class="req">*</span> </label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label>Contact No.<span class="req">*</span> </label>
                <input type="text" pattern="[789][0-9]{9}" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label>Full Address<span class="req">*</span> </label>
                <input type="address" class="form-control" id="address" name="address" required data-validation-required-message="Please enter your full address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label>Locality:</label>
            <select  type="locality" class="form-control" name="locality" id="locality">
                <option value="rural">Locality</option>
              <option value="rural">Rural</option>
              <option value="urban">Urban</option>
            </select>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label>Achievements(Optional)<span class="req"></span> </label>
                <input type="achievements" class="form-control" id="achievements" name="achievements"  autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label>Confirm Password<span class="req">*</span> </label>
                <input type="password" class="form-control" id="password" name="confirmpassword" required data-validation-required-message="Confirm password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block" name="submit"/>
                Sign up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
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
