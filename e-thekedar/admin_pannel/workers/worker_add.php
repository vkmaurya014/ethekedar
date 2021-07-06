<!DOCTYPE html>
<html>
<head>
<?php 

 //print_r($_SESSION['user']);
 $title="Worker | e-Thekedar ";
 if($title!="Home | e-Thekedar "){$add="../../";}else{$add="";}
 require_once $add."admin_pannel/session_admin_check.php";
 require_once $add."styling_components/header_links/header_links.php";
 require_once $add."styling_components/header_links/bootstrap_links.php";

 echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">';
 ?>
</head>
<body>
<!--admin tasks-->
<?php
require_once $add."styling_components/navigation_bar/navigation_bar.php";

?>

<?php 

  
    $user = array();   
 
    if(isset($_POST) and $_POST){
        // action for update
        
       
		// write db operation for update
		                $user_id = "ektusr".time();
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $pass=$_POST['password'];
                        $mob=$_POST['mob'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $state=$_POST['state'];
                        $pin=$_POST['pincode'];
						
                        //add conditions for super admin
                       // $query="UPDATE `user` SET `user_id`='$user_id',`name`='$name',`mob`='$mob',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pin',`password`='$pass' WHERE `email`='$email'";
						$query="INSERT INTO `user`(`user_id`, `name`, `email`, `mob`, `address`, `city`, `state`, `pincode`, `password`) VALUES ('$user_id','$name','$email','$mob','$address','$city','$state','$pin','$pass')";
                        require_once '../../connections/connection.php';
                        $result=mysqli_query($conn,$query);
						print_r($result);
                        mysqli_close($conn);
                        if($result){
                            echo '<center><span class="label label-success">update Successfully</span></center>';
							//change location
							echo '<script>window.location.replace("user_management.php");</script>'; 
                        }
                        else{
                            echo '<center><span class="label label-danger">update Failed</span></center>';
                        }
                        

     	
		
    }
    
	
       
    ?>
	
	<br><br>
<!-- Signup PAGE START FROM HERE!-->

<div class="contianer-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Here!</h3>
                </div>
                <div class="panel-body">
				
				
				<?php if(isset($err_msg) and $err_msg) echo '<div class="error">'.$err_msg.'</div>';?>
                <form method="POST" action="worker_add.php">
                    <div class="form-row">
				
					  
                        <div class="form-group col-md-4">
                        <label for="inputName4">Full name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full name"  required>
                        </div>
                      
                        <div class="form-group col-md-4">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number"  required>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="age">Age</label>
                       <input type="number" class="form-control" name="age" id="age"  required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="wages">Wages</label>
                        <input type="number" class="form-control" name="wages" id="wages"  required>
                        </div>
						</div>
						
                        <div class="form-group col-md-4">
                        <label for="service">Service</label>
                        <select id="service" class="form-control" name="service"  required>
                            <option  selected >choose</option>
							
                            <option value='labour'>Labour</option>
                            <option value='rajgeer'>Rajgeer</option>
                            <option value='plumber'>Plumber</option>
                            <option value='thekedar'>Thekedar</option>
                            <option value='architect'>Architect</option>
                            
                        </select>
                       
                    </div>
                    <div class="form-row">
                        
                    </div>
                    <center>
                    <button type="submit" name="sub" class="btn btn-success ">Add Worker</button>
                   
                    </center>
                </form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
    

</div>
</div>
</div>
</div>
</div>





 <noscript><center>
        <h1 style="color:red;background:yellow;"> Your browser does not support JavaScript :(</h1>
        <h3 style="color:red;background:yellow;"><b>Change</b> or <b>Upgrade</b> your browser!</h3>
        </center>
</noscript>
<br><br><br><br>

<br><br><br><br><br><br><br>











 <!--FOOTER-->
<?php  
require_once $add."styling_components/footer/footer.php";
 ?>
</body>
</html>



