<?php
require_once "../../connections/connection.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM service WHERE Id='" . $_POST["users"][$i] . "'");
}
header("Location:workers_management.php");
?>