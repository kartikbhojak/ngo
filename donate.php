<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>donate|NGO Panel</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('navwithlogin.php');
?>


<div class="container" >
<table class="table table-bordered">
    <div class="table responsive">
    <thead>
    <tr>
    <th>Serial No.</th>
    <th>NGO ID</th>
    <th>NGO name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Area</th>
    <th>Requirements</th>
    <th>Requirements Description</th>
    
    <th>Be a helping hand</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include('connection.php');
$sql=mysqli_query($conn,"select Serial_no,ngo_requirements.ngo_id,req,req_descr,NGO_name,Email,Phone,address,Area from  ngo_requirements inner join registration on ngo_requirements.ngo_id=registration.ngo_id");
$count=mysqli_num_rows($sql);
if(mysqli_num_rows($sql)>0)
{
    while($row=mysqli_fetch_assoc($sql))
    {
           $ngid=$row["ngo_id"];
        echo "<tr>".
        "<td>".$row["Serial_no"]."</td>".
        "<td>".$ngid."</td>".
         "<td>".$row["NGO_name"]."</td>".
        "<td>".$row["Email"]."</td>".
        "<td>".$row["Phone"]."</td>".
        "<td>".$row["address"]."</td>".
        "<td>".$row["Area"]."</td>".
        "<td>"."<h4>"."<u>".$row["req"]."</u>"."</h4>"."</td>".
        "<td>"."<h4>"."<u>".$row["req_descr"]."</u>"."</h4>"."</td>".
       
        '<td><button class="btn btn-primary btn-modal" name="donate" onclick="modalname()" value="21id">Donate</button></td>'.
        "</tr>";
    }
}
else
{
    echo "no results";
}
mysqli_close($conn);
    ?>
    </tbody>
    </div>
</table>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">NGO Details</h4>
      </div>
      <div class="modal-body">
        <h2>
        Contact the given NGO details to provide Non-Monetory help.
        </h2>
        <h3>If you want to help on a general basis scan this QR code</h3>\
        <img src="images/QR.jpg" class="img-responsive center-block">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
	function modalname()
	{
		$(".btn-modal").click(function(){
    $("#myModal").modal();
    
});
	}
</script>
<?php
include('footer.php');
?>

</body>
</html>