<?php
session_start();
$id=$_SESSION["id"];
if(!isset($_SESSION['ngouser']))
{
  $error="sorry you are not logged in or not registered with us.You will be redirected to signup page.";
  echo "<script type='text/javascript'>alert('$error');window.location='signup.php';</script>";
}
?>
<!DOCTYPE html>
<head>
    <title>Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="panel.css">
<script type="text/javascript" src="panel.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 </head>
 <body onload="formdisplay()"> 
<nav class="navbar navbar-m2p sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">AdminPanel</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Dashboard -->
                <li >
                  <a href="index.php">
                      <span class="pull-right hidden-xs showopacity "></span>Home
                  </a>
                </li>
                <li>
                    <a href="#">Hello,<?php echo $_SESSION['ngouser'];?>
                        <span class="menu-icon pull-right hidden-xs showopacity "></span>
                    </a>
                </li>
                <li >
                  <a href="ngo_profile.php">
                      <span class="pull-right hidden-xs showopacity "></span>Profile
                  </a>
                </li>
                <li >
                    <a href="chart.php">
                        <span class="menu-icon pull-right hidden-xs showopacity "></span>
                        Submitted Requirements
                    </a>
                </li> 
                <li >
                    <a href="logout.php">
                        <span class="menu-icon pull-right hidden-xs showopacity "></span>Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container" align="center">
  <h2 > Requirements</h2>
  <form method="post">
    <label class="radio-inline">
      <input type="radio" name="donate-item" value="Food" class="rad" onclick="formdisplay(1)">Food
    </label>
    <label class="radio-inline">
     <input type="radio" name="donate-item" value="Monetary" class="rad" onclick="formdisplay(1)">Monetory
    </label>
    <label class="radio-inline">
     <input type="radio" name="donate-item" value="Clothes" class="rad" onclick="formdisplay(1)">Clothes
    </label>
    <label class="radio-inline">
     <input type="radio" name="donate-item" value="Manpower" class="rad" onclick="formdisplay(1)">Manpower
    </label>
    <label class="radio-inline">
     <input type="radio" name="donate-item" value="Others" class="rad" onclick="formdisplay(1)">Others
    </label>
    <br><textarea type="text" id="rad-text" name="msg-body" placeholder="Write Your  Requirements here"  rows="6" cols="45" required="yes"></textarea><br><br>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div>

        <script >
          function formdisplay(x)
          {
              if(x==1)
              {
                console.log("hissdcs");
                document.getElementById("rad-text").style.display='block';
              }
              else
              {
                console.log("hidsds");
                document.getElementById("rad-text").style.display='none';
              }
          }
        </script>
</body>
     <?php
include('connection.php');
//echo $id;
if(isset($_POST['submit']))
{
  $donate=$_POST['donate-item'];
  $desc=$_POST['msg-body'];
  $sqle=mysqli_query($conn,"insert into ngo_requirements(ngo_id,req,req_descr)values('$id','$donate','$desc')");
  if($sqle)
  {
    $message="Data has been successfully submitted and will be visible to users to help.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else
  {
    $error="sorry you are not logged in or not registered with us.You will be redirected to signup page.";
  echo "<script type='text/javascript'>alert('$error');</script>";
  }
}
mysqli_close($conn);
?>
<?php
include('footer.php');
?>
</html>