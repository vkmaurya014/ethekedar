<?php
session_start();
if(!(isset($_SESSION['user'])) or ($_SESSION['user']!="super_admin")){
	header("Location: ../index.php");
	exit();
}
?>	