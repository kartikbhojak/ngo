<?php
session_start();
session_destroy();

?>

<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="mission.css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">WebX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="donate.php">DONATE</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="faq.php">FAQs & Queries</a></li>
        <li><a href="mission.php">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div id="myPageContent" class="container-fluid">
        <section id="home">
            
            
        
            
            <div id="textSlider" class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 iamCol">
                                    <p>About</p>
                                    <p>Us</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 slideCol">
                                    <div class="scroller">
                                        <div class="inner">
                                            <p>Let's</p>
                                            <p>Make</p>
                                            <p>The World</p>
                                            <p>Heaven</p>
                                        </div>
                                    </div>
                                 </div>
                               
                        
                
            </div>
            <div id="mission" class="col-xs-6 col-sm-6 col-lg-8">
                    <h1><span><u>Our Vision</u></span></h1>
                    <blockquote>
                    <p class="para">We Envision To Provide A Benchmark for NGOs,Here,Every click is Magical,Each stroke of a key puts a smile on someone's face. 
                    </p></blockquote>
                    
             </div>
            
            
            
            
        </section>    
        </div>
        <?php
include('footer.php');
?> 
</body>
</html>


    
    