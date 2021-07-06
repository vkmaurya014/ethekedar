
<style>

/* On mouse-over, add a deeper shadow */
.container-fluid:hover {
  box-shadow: 0 8px 16px 0 rgba(0.2,0,0,0.2);
}





</style>

<nav class="navbar navbar-inverse" role="navigation"  style="width:80%; margin:auto; margin-bottom:25px; margin-top:15px; background-color:#41bffa;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      
	  <a href="worker_add.php" class="btn  btn-sm btn-warning text-center" style=" margin-left:50px; margin-top:10px;">Add Worker</a>
	 
    </div>
	
	
	
	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color:white;">select worker Type<b class="caret"></b></a>
          <ul class="dropdown-menu" style="background-color: #41bffa;">
          <li><a href="#" onclick="changeType('*');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >All</a></li>
            <li><a href="#" onclick="changeType('architect');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >Archietect</a></li>
            <li><a href="#" onclick="changeType('labour');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >Labour</a></li>
            <li><a href="#" onclick="changeType('plumber');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >Plumber</a></li>
            <li><a href="#" onclick="changeType('rajgeer');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >Rajgeer</a></li>
            <li><a href="#" onclick="changeType('thekedar');" style="color:white;"  onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" >Thekedar</a></li>
			<li>   <form name="form1" method="post" action="">
                   <input type="checkbox" name="labour" value="labour" >labour
                     
           </li>
		   <li>   
                   <input type="checkbox" name="rajgeer" value="rajgeer"> Rajgeer
                     
           </li>
		    <li>   
                   <input type="button" name="filter" value="filter" onclick="changeType('labour')"/>
                   </form>
           </li>
          </ul>
        </li>
		
      </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
	<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
   
  
</nav>
