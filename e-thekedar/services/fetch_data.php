<?php
require '../connections/connection.php';
if(isset($_REQUEST['start'],$_REQUEST['limit'],$_REQUEST['type'])){
    $add='';
    if($_REQUEST['type']=='*'){
        $add='where status=0';
    }
    else{
        $add="WHERE service='".$_REQUEST['type']."' and status=0";
    }
    $query="SELECT id,name,service FROM service ".$add." ORDER BY id LIMIT ".$_REQUEST['start'].",".$_REQUEST['limit'].";";
    $result=mysqli_query($conn,$query);
    //$html='<div class="row">';
    while($row=mysqli_fetch_array($result)){
        echo '<div class="col-sm-3">
    <center><div class="card" style="width:80%;" >
        <center><img src="styling_components/logos/man.svg" class="avtar" alt="Avatar" style="width:50%;"></center>
        <div class="contain text-center">
            <h4><b>'.$row[1].'</b></h4>
            <p id="ser">'.$row[2].'</p>
            <a href="services_submodule/book.php?id='.$row[0].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;">Book</a>
        </div>
    </div></center>
</div>';
    }
    
}
mysqli_free_result($result);
mysqli_close($conn);
?>