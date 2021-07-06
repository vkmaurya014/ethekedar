<?php
if(isset($_REQUEST['service'])){
    $add='';
    if($_REQUEST['service']=="*"){
        $add='';
    }
    else{
        $add="WHERE service='".$_REQUEST['service']."'";
    }
    require '../connections/connection.php';
    $query="SELECT COUNT(id) FROM service $add ;";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_row($result);
    mysqli_free_result($result);
    mysqli_close($conn);
    echo $data[0];
}
?>