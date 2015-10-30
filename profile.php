<?php
        session_start();
        $_SESSION['username'];

        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"pic/".$_FILES['file']['name']);
                $con = mysqli_connect("rts2ucom.ipagemysql.com","adminjs","js931110","dblogin") or die("im done");
                $q = mysqli_query($con,"UPDATE login_member SET Member_Profilepic = '".$_FILES['file']['name']."' WHERE Member_Username = '".$_SESSION['username']."'") or die("im fucked");
                
        }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
 
    <!-- NAVBAR CODE END -->
 <section id="main-content">

		 <div class = "wrapper">
		 <div style="width:500px; margin:0 auto;">
       
    
          	<h3>Edit Profile</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div>
                    <form action="profileedit.php" method="post">
                    <div class="form-panel">
                  	  <h4><Edit Info</h4>
					<label>Name</label>
                    <input type="text" class="form-control" name="new_name" placeholder="<?php echo $profile['Member_Name']?>">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="<?php echo $profile['Member_Email']?>" readonly>
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="new_phone" placeholder="<?php echo $profile['Member_Phone']?>">
                    <label>Address</label>
                    <input type="text" class="form-control" name="new_address" placeholder="<?php echo $profile['Member_Address']?>">
                    <label>City</label>
                    <input type="text" class="form-control" name="new_city" placeholder="<?php echo $profile['Member_City']?>">
                    <br>
                     <input type="submit" class="btn btn-success submit" value="Save Changes" /><a href ="check_edit"</a>
                          </div>
                    </form>  
                </div>
            </div>
		</div>	
      </div>           
	
      <!--main content end-->
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
