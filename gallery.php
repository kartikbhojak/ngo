<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style3.css">
  <script src="js/lightbox.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('navwithlogin.php');
?>
<section>
<div class="row" id="wrapper">
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/1.jpg" data-lightbox="gallery">
          <img src="images/1.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/2.jpeg"  data-lightbox="gallery">
          <img src="images/2.jpeg" width="100%"  class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/3.jpg"  data-lightbox="gallery">
          <img src="images/3.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/4.jpg"  data-lightbox="gallery">
          <img src="images/4.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
</div>
</section>
<section>
<div class="row" id="wrapper">
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/5.jpg"  data-lightbox="gallery">
          <img src="images/5.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/6.jpg"  data-lightbox="gallery">
          <img src="images/6.jpg" width="100%"  class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/7.jpg"  data-lightbox="gallery">
          <img src="images/7.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/8.jpg"  data-lightbox="gallery">
          <img src="images/8.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
</div>
</section>
<section>
<div class="row" id="wrapper">
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/9.jpg"  data-lightbox="gallery">
          <img src="images/9.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/2.jpeg"  data-lightbox="gallery">
          <img src="images/2.jpeg" width="100%"  class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
          <a href="images/1.jpg"  data-lightbox="gallery">
          <img src="images/1.jpg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="thumbnail">
        <a href="images/2.jpeg"  data-lightbox="gallery">
          <img src="images/2.jpeg" width="100%" class="img-thumbnail"/></a>
</div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script>
</div>
</section>
<?php
include('footer.php');
?>

</body>
</html>