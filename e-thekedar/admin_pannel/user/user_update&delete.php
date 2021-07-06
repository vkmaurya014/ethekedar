<!DOCTYPE html>
<html>
<head>
<?php 

 //print_r($_SESSION['user']);
 $title="Admin | e-Thekedar ";
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
		                $user_id = $_POST["ID"];
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $pass=$_POST['password'];
                        $mob=$_POST['mob'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $state=$_POST['state'];
                        $pin=$_POST['pincode'];
                        //add conditions for super admin
                        $query="UPDATE `user` SET `user_id`='$user_id',`name`='$name',`mob`='$mob',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pin',`password`='$pass' WHERE `email`='$email'";
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
    
	if(isset($_GET['id']) and $_GET['work']=="update"){
        // clean data
        // display form with existing data
        // write db operations for fetching record
         $user = array();
		$var =  $_GET['id'];
	
		// print_r($var);
		 require '../../connections/connection.php';

         $query="SELECT * FROM user where user_id='$var'";
         $result=mysqli_query($conn,$query);
		 if(mysqli_num_rows($result)>0)
           { 
            while($record = mysqli_fetch_assoc($result))
            {
                $user=$record;
            }
         
         
			
        }
		mysqli_close($conn);
	}
	
	
	if(isset($_GET['id']) and $_GET['work']=="delete"){
        // clean data
        // display form with existing data
        // write db operations for fetching record

		$var =  $_GET['id'];
	
		 print_r($var);
		 require '../../connections/connection.php';

         $query="delete FROM user where user_id='$var'";
         $result=mysqli_query($conn,$query);
		 
	     echo '<script>window.location.replace("user_management.php");</script>'; 
                      
		  
		mysqli_close($conn);
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
                <form method="POST" action="user_update&delete.php">
                    <div class="form-row">
				
					    <div class="form-group col-md-4">
                        <label for="ID">ID</label>
                        <input type="text" class="form-control" name="ID" id="ID"  value="<?php echo $user['user_id'];?>" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputName4">Full name</label>
                        <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Full name" value="<?php echo $user['name'];?>" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input type="text" class="form-control" name="email" id="inputemail4" placeholder="Email" value="<?php echo $user['email'];?>" required readonly>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputMobile4">Mobile No.</label>
                        <input type="text" class="form-control" name="mob" id="inputMoblie4" placeholder="Mobile Number" value="<?php echo $user['mob'];?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" id="inputAddress" name="address"   required><?php echo $user['address'];?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity" value="<?php echo $user['city'];?>" required>
                        </div>
						
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state"  required>
                            <option value="<?php echo $user['state'];?>" selected ><?php echo $user['state'];?></option>
							
                            <option value='Andhra Pradesh'>Andhra Pradesh</option>
                            <option value='Arunachal Pradesh'>Arunachal Pradesh</option>
                            <option value='Asom (Assam)'>Asom (Assam)</option>
                            <option value='Bihar'>Bihar</option>
                            <option value='Chhattisgarh'>Chhattisgarh</option>
                            <option value='Goa'>Goa</option>
                            <option value='Gujarat'>Gujarat</option>
                            <option value='Haryana'>Haryana</option>
                            <option value='Himachal Pradesh'>Himachal Pradesh</option>
                            <option value='Jammu and Kashmir'>Jammu and Kashmir</option>
                            <option value='Jharkhand'>Jharkhand</option>
                            <option value='Karnataka'>Karnataka</option>
                            <option value='Kerala'>Kerala</option>
                            <option value='Madhya Pradesh'>Madhya Pradesh</option>
                            <option value='Maharashtra'>Maharashtra</option>
                            <option value='Manipur'>Manipur</option>
                            <option value='Meghalaya'>Meghalaya</option>
                            <option value='Mizoram'>Mizoram</option>
                            <option value='Nagaland'>Nagaland</option>
                            <option value='Orissa'>Orissa</option>
                            <option value='Punjab'>Punjab</option>
                            <option value='Rajasthan'>Rajasthan</option>
                            <option value='Sikkim'>Sikkim</option>
                            <option value='Tamil Nadu'>Tamil Nadu</option>
                            <option value='Telangana'>Telangana</option>
                            <option value='Tripura'>Tripura</option>
                            <option value='Uttar Pradesh'>Uttar Pradesh</option>
                            <option value='Uttarakhand (Uttaranchal)'>Uttarakhand (Uttaranchal)</option>
                            <option value='West Bengal'>West Bengal</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="pincode" value="<?php echo $user['pincode'];?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Enter Password</label>
                        <input type="password" class="form-control"  id="inputPassword4" placeholder="Enter Password"  value="<?php echo $user['password'];?>" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword5">Re-Enter Password</label>
                        <input type="text" class="form-control" name="password" id="inputPassword5" placeholder="Re-Enter Password" value="<?php echo $user['password'];?>" required>
                        </div>
                    </div>
                    <center>
                    <button type="submit" name="sub" class="btn btn-success ">Update Info</button>
                   
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



