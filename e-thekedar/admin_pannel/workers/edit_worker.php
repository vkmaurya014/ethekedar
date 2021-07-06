<?php
require_once "../../connections/connection.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["userName"]);

for($i=0;$i<$usersCount;$i++) {
mysqli_query($conn, "UPDATE service set name='" . $_POST["userName"][$i] . "',mob='" . $_POST["mobile"][$i] . "',age='" . $_POST["age"][$i] . "',status='" . $_POST["status"][$i] . "', service='" . $_POST["service"][$i] . "',wages='" . $_POST["wages"][$i] . "' WHERE id='" . $_POST["userId"][$i] . "'");
 }
header("Location:workers_management.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php

$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) { 
$result = mysqli_query($conn, "SELECT * FROM service WHERE Id='" . $_POST["users"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>ID</label></td>
<td><input type="text" name="userId[]" class="txtField" value="<?php echo $row[$i]['id']; ?>" readonly></td>
</tr>
<tr>
<td><label>Name</label></td>
<td><input type="text" name="userName[]" class="txtField" value="<?php echo $row[$i][1]; ?>"></td>
</tr>
<tr>
<td><label>Mobile</label></td>
<td><input type="number" name="mobile[]" class="txtField" value="<?php echo $row[$i][2]; ?>"></td>
</tr>
<tr>
<td><label>Service</label></td>
<td><input type="text" name="service[]" class="txtField" value="<?php echo $row[$i][3]; ?>"></td>
</tr>
<tr>
<td><label>Age</label></td>

<td><input type="text" name="age[]" class="txtField" value="<?php echo $row[$i][4]; ?>"></td>
</tr>
<tr>
<td><label>Status</label></td>

<td>  


<select name="status[]" id="cars">
  <option value=1 <?php if( $row[$i][5]==1){echo "selected";} ?> >Booked</option>
  <option value=0 <?php if($row[$i][5]==0){echo "selected";} ?> >Not booked</option>

</select>
            
       
</td>
</tr>
<tr>
<td><label>Wages</label></td>
<td><input type="number" name="wages[]" class="txtField" value="<?php echo $row[$i][6]; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php

}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>

</body>

</html>