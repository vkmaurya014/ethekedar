<?php
session_start();
if(!isset($_SESSION['user'])){
   header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<?php 
 $title="My Order| e-Thekedar ";
 if($title!="Home | e-Thekedar "){$add="../";}else{$add="";}
 require_once $add."styling_components/header_links/header_links.php";
 require_once $add."styling_components/header_links/bootstrap_links.php";

echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>';
require_once $add."styling_components/navigation_bar/navigation_bar.php";
//require_once "styling_components/banner/site_banner.php";
 ?>
<br><br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<?php
  $user=$_SESSION['user'];
  $query="SELECT * FROM orderdetails WHERE booked_by='$user' order by status ;";
  require_once "../connections/connection.php";
  $result=mysqli_query($conn,$query);
  mysqli_close($conn);
  ?>

<table  class="table table-responsive table-borderless" style="font-family: Arial, Helvetica, sans-serif;" >
<?php
	while($row=mysqli_fetch_array($result)){
	?>
    
    <tr style="background-color:#fffcad;">
      <td><h4>Order Id:<b> <?php echo $row['order_id']; ?></b></h4></td><td></td><td></td><td style="text-align:left; text-transform: capitalize;" ><h4>Service:<b> <?php echo $row['service_type']; ?></b></h4></td>
    </tr>
    <tr><td><b>Status</b></td><td><b>Date</b></td><td><b>No. of Days</b></td><td><b>Price</b></td></tr>
    <tr>         
        <td ><span id="status" class="label <?php if($row['status']=='canceled'){ echo 'label-danger';}else if($row['status']=='booked'){echo 'label-warning';}else{ echo 'label-success';} ?>">
            <?php echo $row['status']; ?></span>
        </td>
        <td><?php echo $row['date']; ?></td><td><?php echo $row['time_span']; ?></td><td><?php echo $row['booking_price']; ?> Rs/-</td>
    </tr>
    <tr ><td></td><td></td>
      
      <td><input type="button" id="<?php echo $row['order_id'];?>" onclick="cancel(this);" value="End Service" class="btn btn-sm btn-danger pull-right" ></td>
      <td><input type="button" id="<?php echo $row['order_id'];?>" onclick="complete(this);" value="Complete" class="btn btn-sm btn-success"><input type="hidden" value="<?php echo $row['booked_to'];?>" id="<?php echo $row['order_id'].'hd';?>"></td>
    </tr>
     
    <?php
	}
	?>
  </table>

<!-- <table class="table table-hover text-center">

    <tr>
        <td><img  height="90px" width="70px" src="../styling_components/logos/man.svg" alt="avatar" class=" img-thumbnail"></td>
        <td></td><td></td>
        <td><input type="button" onclick=delete_img(this); class="btn btn-sm btn-warning" value="Completed" id=""></td>
    </tr>        

	</table> -->
</div>
<div class="col-md-3"></div>
</div>
<br><br>
<br><br><br><br>
 <!--FOOTER-->
 <?php  
require_once $add."styling_components/footer/footer.php";
 ?>
 <script type="text/javascript">
function cancel(button){
  var orderid=button.id;
  var service_id=document.getElementById(button.id+'hd').value;
  alert(orderid+"  "+service_id);
}
</script>
</body>
</html>


