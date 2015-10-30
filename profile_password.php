<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
  	  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('newpw');
    var pass2 = document.getElementById('renewpw');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(newpw.value == renewpw.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>My Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/assets3/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="assets/assets3/css/style.css" rel="stylesheet">
    <link href="assets/assets3/css/style-responsive.css" rel="stylesheet">



  </head>


  <body>
<style>
  .container {
  height: 550px;
  width: 550px;
  position: absolute;
   
  margin: -200px 0 0 -200px;
  left: 50%;
  top: 50%;
}
 
.box {
  height: 550px;
  width: 550px;
  position: absolute;

}

</style>
  
  
  
<?php
	
session_start();

$username=$_SESSION['username'];


$sql1=mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110");
mysql_select_db("dblogin")or die("cannot select DB");

$query = "SELECT * FROM login_member WHERE Member_Username='$username'";
$results = mysql_query($query) or die ("Error reading from database");
$profile = mysql_fetch_array($results);
?>
 <section id="container" >
      <!--header start-->
       <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a class="logo"><b>Profile</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
 
              
                  
                    
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                       
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a  href="ghome" class="logo"><b>Home</b></a></li>
                    <li><a class="logout" href="logout">Logout</a></li>
            	</ul>
            </div>
        </header>
	</section>	
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
 <section id="container" >
     <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                 <p class="centered"><?php
                        $con = mysqli_connect("rts2ucom.ipagemysql.com","adminjs","js931110","dblogin");
                        $q = mysqli_query($con,"SELECT * FROM login_member WHERE Member_Username='".$_SESSION['username']."'") or die("damn");
                        while($row = mysqli_fetch_assoc($q)){
                               
                                if($row['Member_Profilepic'] == "/pic/default.png"){
                                        echo "<img width='250' height='250' src='pic/default.png' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='250' height='250' src='pic/".$row['Member_Profilepic']."' alt='Profile Pic'>";
                                }
                                echo "<br>";
                        }
                     ?></p>   
                  <br><form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                   <br>     <input type="submit" class="btn btn-info" name="submit" value="Upload New Profile Pic">
                    </form>
               

                  
                  <br><br><li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Privacy</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="profile">Edit Info</a></li>
						     <li class=><a  href="profile_password">Edit Password</a></li>
                      </ul>
                  </li>
 
       
              </ul>
              <!-- sidebar menu end-->
		  </div>
      </aside>
	  </section>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start--> 
	  
<section id="main-content">

		<form name=myForm onSubmit="return validatePwd()" action="edit_password.php" method="post">	
		<div style="width:800px; margin:0 auto;">
		 <div class = "wrapper">
		 <div class ="container">
          	<h4>Edit Password</h4>
			<div class="row mt">
          	<div class="col-md-12">
			 <div class="form-panel">
	
                    
					  <div class ="control-group">
                        <label>Enter Old Password</label>
							<input type="password" class="form-control" name="oldpw" size= "50"  required="required"  autocomplete="off" id="oldpw" 
								minlength="8"  
								/>
						<label>Enter New Password</label>
							<input type="password" class="form-control" name="newpw" size="50"  required="required" autocomplete="off" id="newpw" 
								minlength="8" 
						
								/>
								
						<label>Confirm New Password</label>
							<input type="password" class="form-control" name="renewpw" size="50" required = "required"  autocomplete="off" id="renewpw" 
								minlength="8" onkeyup="checkPass(); return false;" 
								/>	
							<span id="confirmMessage" class="confirmMessage"></span>								
							<br>	
						 <br>
                        <input type = "submit" class="btn btn-warning" value = "Change Password"/>
						
					</div>
                 
                    </div>
		      </div>	
		
                </div>	
            </div>
		</div>
	</div>		
		</form>
</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/assets3/js/jquery.js"></script>
    <script src="assets/assets3/js/jquery-1.8.3.min.js"></script>
    <script src="assets/assets3/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/assets3/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/assets3/js/jquery.scrollTo.min.js"></script>
    <script src="assets/assets3/js/jquery.nicescroll.js" type="text/javascript"></script>
 




    <!--common script for all pages-->
    <script src="assets/assets3/js/common-scripts.js"></script>
   

    <!--script for this page-->

	
	<script type="application/javascript">
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
