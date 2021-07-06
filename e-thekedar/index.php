<!DOCTYPE html>
<html>
<head>
<?php
 $title="Home | e-Thekedar ";
 if($title!="Home | e-Thekedar "){$add="../";}else{$add="";}
 require_once $add."styling_components/header_links/header_links.php";
 require_once $add."styling_components/header_links/bootstrap_links.php";
 ?>
</head>
<body >

<div id="body"></div>
<?php
require_once "styling_components/navigation_bar/navigation_bar.php";
require_once "services/service_pannel.php";
?>
<noscript><center>
        <h1 style="color:red;background:yellow;"> Your browser does not support JavaScript :(</h1>
        <h3 style="color:red;background:yellow;"><b>Change</b> or <b>Upgrade</b> your browser!</h3>
        </center>
</noscript>
<br><br><br><br><br><br><br><br>
<?php
require_once "styling_components/footer/footer.php";
 ?>
    </body>
</html>