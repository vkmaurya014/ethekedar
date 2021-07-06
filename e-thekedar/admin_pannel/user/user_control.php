
<style>
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
}

/* Add some padding inside the card container */

.contain {
  padding: 10px 20px;
   
}
.avtar{
    margin-top:10px;
}
p#ser{text-transform: capitalize;text-weight:bold;text-align:justify;}
p#ser1{text-weight:bold;text-align:justify;}



</style>
<div class="container text-center" id="wrap">




<?php

require '../../connections/connection.php';

    $query="SELECT * FROM user;";
    $result=mysqli_query($conn,$query);
    //$html='<div class="row">';
    while($row=mysqli_fetch_array($result)){
        echo '<div class="col-sm-4">
    <center><div class="card" >
       
        <div class="contain text-center" style="width:90%;">
		
            <h4><b>'.$row[1].'</b></h4>
			
			
			
			<table>
			<tr>
			<td><p id="ser">
            <b style="color:#33ccff";>type</b>
			</p>
			</td>
			<td></td>
			
			<td>
			<p id="ser1">
			'.$row[0].'
			</p>
			</td>
			</tr>
			
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>email</b>
			</p>
			</td>
			<td></td>
			
			<td>
			<p id="ser1">
			'.$row[2].'
			</p>
			</td>
			</tr>
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>password</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'." ".$row[8].'
			</p>
			</td>
			</tr>
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>address</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'.$row[4].'
			</p>
			</td>
			</tr>
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>city</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'.$row[5].'
			</p>
			</td>
			</tr>
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>state</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'.$row[6].'
			</p>
			</td>
			</tr>
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>pinCode</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'.$row[7].'
			</p>
			</td>
			</tr>
			
			
			<tr>
			<td>
			
			<p id="ser"><b style="color:#33ccff";>phone</b>
			</p>
			</td>
			<td></td>
			<td>
			<p id="ser1">
			'.$row[3].'
			</p>
			</td>
			</tr>
			
			
			
			</table>
			
			
            <a href="user_update&delete.php?work=delete&id='.$row[0].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;">Eradicate</a>
			&nbsp;&nbsp;
			&nbsp;&nbsp;
			<a href="user_update&delete.php?work=update&id='.$row[0].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;">Update</a>
        </div>
    </div></center>
</div>';
    }
    

mysqli_free_result($result);
mysqli_close($conn);


?>

</div>