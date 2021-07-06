
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
  padding: 2px 20px;
}
.avtar{
    margin-top:10px;
}
p#ser{text-transform: capitalize;text-weight:bold;}
</style>
<div class="container text-center" id="wrap">


<script>

function changeType(x){
    var wrap = document.getElementById("wrap").innerHTML='';
    type=x;
    start=0;
    limit=8;
    
    fetch(start,limit); 
}
function fetch(start,limit){
    getlim(type);
    appear();
    var wrap =document.getElementById("wrap");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            disappear();
            wrap.innerHTML+=this.responseText;
            }
    };
    xhttp.open("GET", "services/fetch_data.php?start="+start+"&limit="+limit+"&type="+type, true);
    xhttp.send();
}

function getlim(x){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            maxlimit=this.response;
            }
    };
    xhttp.open("GET", "services/getlimit.php?service="+x, true);
    xhttp.send();
}
function yHandler(){
    var wrap = document.getElementById("wrap");
    var contentHeight = wrap.offsetHeight; //get page content Height
    var yOffset = window.pageYOffset; //get the vertical scroll position
    var y = yOffset + window.innerHeight;
    if(y >= contentHeight){
        start=start+(limit/2);
        if(start<=maxlimit){

        fetch(start,(limit/2));
        
        }
    } 
}
var start=0;
var limit=12;
var maxlimit=0;
var type="*";
fetch(start,limit);
window.onscroll=yHandler;
</script>


<?php 

echo '<div class="col-sm-3">
    <center><div class="card" style="width:80%;">
        <center> <a href="workers/workers_management.php?id='.$_SESSION['user'].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;"><img src="../styling_components/logos/man.svg" class="avtar" alt="Avatar" style="width:50%;"></a></center>
        <div class="contain text-center">
            <h4><b>workers management</b></h4>
           
            
        </div>
    </div></center>
</div>';


echo '<div class="col-sm-3">
    <center><div class="card" style="width:80%;" >
        <center><a href="../services_submodule/book.php?id='.$_SESSION['user'].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;"><img src="../styling_components/logos/man.svg" class="avtar" alt="Avatar" style="width:50%;"></a></center>
        <div class="contain text-center">
            <h4><b>payment management</b></h4>
            
         
        </div>
    </div></center>
</div>';


echo '<div class="col-sm-3">
    <center><div class="card" style="width:80%;" >
        <center><a href="../services_submodule/book.php?id='.$_SESSION['user'].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;"><img src="../styling_components/logos/man.svg" class="avtar" alt="Avatar" style="width:50%;"></a></center>
        <div class="contain text-center">
            <h4><b>booking management</b></h4>
           
          
        </div>
    </div></center>
</div>';

echo '<div class="col-sm-3">
    <center><div class="card" style="width:80%;" >
        <center><a href="../admin_pannel/user/user_management.php?id='.$_SESSION['user'].'" class="btn  btn-sm btn-warning text-center" style="margin-bottom:10px;"><img src="../styling_components/logos/man.svg" class="avtar" alt="Avatar" style="width:50%;"></a></center>
        <div class="contain text-center">
            <h4><b>User management</b></h4>

          
        </div>
    </div></center>
</div>';





?>
</div>