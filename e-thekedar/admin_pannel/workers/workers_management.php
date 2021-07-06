<?php 

 $title="| e-Thekedar ";
 if($title!="Home | e-Thekedar "){$add="../../";}else{$add="";}
 require_once $add."admin_pannel/session_admin_check.php";
 
 require_once $add."styling_components/header_links/header_links.php";
 require_once $add."styling_components/header_links/bootstrap_links.php";
 require_once $add."styling_components/navigation_bar/navigation_bar.php";
  echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">';

 require_once "user_add_navigationbar.php";
 ?>


<?php 
require_once "../../connections/connection.php";
$query="SELECT * FROM service";
$result = mysqli_query($conn,$query);

?>

<html>
<head>


<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" type="text/javascript">



function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "worker_delete.php";
document.frmUser.submit();
}
}


function setUpdate() {
if(confirm("are u sure want to update")){
document.frmUser.action = "edit_worker.php";
document.frmUser.submit();
}
}

function changeType(x){
	
    var wrap = document.getElementById("wrap");
    var type = x;
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            
            wrap.innerHTML+=this.responseText;
            }
    };
    xhttp.open("GET", "workers_management.php?type="+type, true);
    xhttp.send();
	
    
}



</script>

<style>

tr:nth-child(even) {background-color: #ffff99;}

</style>
</head>
<body>
<div id="wrap"> </div>
<form name="frmUser" method="post" action="">
<div style="width:900px; margin:auto;">
<table class="table table-hover">

<tr class="table-primary">
<td >Select</td>
<td >Woker Id</td>
<td >Name</td>
<td >Mob</td>
<td >Service</td>
<td >Age</td>
<td >Status</td>
<td >Wages</td>
</tr>

<?php
$i=0;

while($row = mysqli_fetch_array($result)) {
//print_r($i);
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row[0]; ?>" ></td>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php if($row[5]== 0){echo "Not Booked";} else {echo "booked";} ?></td>
<td><?php echo $row[6]; ?></td>


</tr>
<?php
$i++;
}
?>

<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdate();" /> <input type="button" name="delete" value="delete"  onClick="setDeleteAction();" /> </td>
</tr>
</table>
</form>
</div>
</body>
<?php mysqli_free_result($result);
      mysqli_close($conn);
	  ?>
</html>