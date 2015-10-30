<?php
$db = mysql_connect('rts2ucom.ipagemysql.com','adminjs','js931110') or die("cannot connect");


session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Js">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <script src="js/modernizr.custom.js"></script>
     <script src="js/bootstrap.js"></script>
  
    
    <!--hover-->
    <link href="css/hover.css" rel="stylesheet" media="all">

    
    <!--customize style-->
    <style>
    .carousel-control.left, .carousel-control.right {
  background: none !important;
  filter: progid: none !important;
  outline: 0;
 }
.carousel .carousel-control {
  visibility: hidden;
}
.carousel:hover .carousel-control {
  visibility: visible;
}
        
    button {
	color: #888;
	text-decoration: none;
    }

    button:hover,
    button:active {
	color: #333;
    }
    #logo {
    position: absolute;
    }
   .footer {
    position:absolute;
    margin-top: auto bottom: 0;
    width: 100%;
    background: black;
    margin: 0;
    }
    .style1{
    font-color: white;
    }
    .imag{
    border: 3px solid white;
    margin: 0;
    }
    </style>
    
    
    <title>R2S</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
</head>

<body>
    
    
    <!-- Facebook
  
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    -->
    <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-header" href="index"><img src="pic/logo.png" height=50px></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav list-hover-slide">
                    <li>
                        <a href="ghome">Home</a>
                    </li>

                    <li>
                        <a href="http://rts2forum.proboards.com/">Community</a>
                    </li>
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="show-if-true" style="display: none">
                        <a href="login">Login/Register</a>                                  
                    </li>
                    <li id="show-if-false" style="display: none">
                       <a href="profile">My Profile</a>
                    </li>
                    <li id="show-if-false1" style="display: none">
                        <a href="logout">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

       <div class="col-sm-3 col-xs-3">
            <div class="imag">
                <img src="pic/teddy1.jpg" width=100% height=100%> 
           </div>
           <div class="imag">
                <img src="pic/home1.jpg" width=100% height=100%> 
           </div>
            </div>
        
              <div class="col-sm-9 col-xs-9">


                <div class="row carousel-holder">

                   
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="pic/gymchair.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="pic/gymchair.png" alt="">
                                </div>
                            </div>
                            
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        
                    

                </div>

            </div>
               
<div class="tabpanel"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">New</a></li>
    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Gym's Products</a></li>
    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Accessories</a></li>
  </ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab1">
	   <div class="col-sm-4 col-xs-6 col-md-4">
        <div>
          <div class="grid cs-style-1"><figure>
              <a href='items.php?id=26'><img src="pic/usb.jpg" alt="img02"></a>
						<figcaption>
							<h3>Dual Port USB 2.0</h3>
							<span>Start from RM30</span>
							<a href='items.php?id=26'>Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel-->
      </div><!--/col-->
        
        <div class="col-sm-4 col-xs-6 col-md-4">
        <div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/doorlever.png" alt="img02">
						<figcaption>
							<h3>Door Lever</h3>
							<span>Start from RM29</span>
							<a href='items.php?id=lever'>Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/bench.png" alt="img02">
						<figcaption>
							<h3>Gym Bench</h3>
							<span>Start from RM199</span>
							<a href="items.php?id=Bench">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 
      </div><!--/col-->
        
<div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
              <a href="items.php?id=1"><img src="pic/c.jpg" alt="img02"></a>
						<figcaption>
							<h3>Sim Adapter</h3>
							<span>Start from RM5</span>
							<a href="items.php?id=1">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      	<div>
          <div class="grid cs-style-1"><figure>
              <a href="items.php?id=2"><img src="pic/p.JPG" alt="img02"></a>
						<figcaption>
							<h3>Screen Protector</h3>
							<span>Start from RM10</span>
							<a href="items.php?id=2">Take a look</a>
						</figcaption>
					</figure></div>
          </div>
            <!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      	<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/Gloves%20Blue.png" alt="img02">
						<figcaption>
							<h3>Glove</h3>
							<span>Start from RM35</span>
							<a href="items.php">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 

      </div><!--/col--> 
        
    </div>
    
<div role="tabpanel" class="tab-pane" id="tab2">
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/bench.png" alt="img02">
						<figcaption>
							<h3>Gym Bench</h3>
							<span>Start from RM199</span>
							<a href="items.php?id=Bench">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 
      </div><!--/col-->
        
<div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/glove1.png" alt="img02">
						<figcaption>
							<h3>Gloves</h3>
							<span>Start from RM34</span>
							<a href="items.php?id=PowerGlove">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      	<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/bench.png" alt="img02">
						<figcaption>
							<h3>Gym Bench</h3>
							<span>Start from RM199</span>
							<a href="items.php">Take a look</a>
						</figcaption>
					</figure></div>
          </div>
            <!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      	<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/Gloves%20Blue.png" alt="img02">
						<figcaption>
							<h3>Glove</h3>
							<span>Start from RM35</span>
							<a href="items.php">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 

      </div><!--/col--> 
    </div>
    
<div role="tabpanel" class="tab-pane" id="tab3">
      
      <div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/c.jpg" alt="img02">
						<figcaption>
							<h3>Sim Adapter</h3>
							<span>Start from RM5</span>
							<a href="items.php?id=Bench">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 
      </div><!--/col-->
        
<div class="col-sm-4 col-xs-6 col-md-4">
      
      		<div>
          <div class="grid cs-style-1"><figure>
						<img src="pic/p.JPG" alt="img02">
						<figcaption>
							<h3>Screen Protector</h3>
							<span>Start from RM10</span>
							<a href="items.php?id=PowerGlove">Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel--> 

      </div><!--/col--> 
    
     <div class="col-sm-4 col-xs-6 col-md-4">
        <div>
          <div class="grid cs-style-1"><figure>
              <a href='items.php?id=26'><img src="pic/usb.jpg" alt="img02"></a>
						<figcaption>
							<h3>Dual Port USB 2.0</h3>
							<span>Start from RM30</span>
							<a href='items.php?id=26'>Take a look</a>
						</figcaption>
					</figure></div>
          </div><!--/panel-->
      </div><!--/col-->

       
</div>
        
    </div>
    </div>
        
    </div>
    </div>
    <!-- /.container -->
<br>
<br>
<br>
 <footer class="footer">
     <br>
        <!-- Footer -->
        <!--<div class="fb-like-box col-sm-3 col-xs-6" data-href="https://www.facebook.com/r2sgym" data-  height="180" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>-->
         <div class="col-lg-6 col-lg-offset-3 text-center">
                
                  
                    <!--<a href="http://plus.google.com"><img src="pic/g+.png" height="30px"></a>&nbsp;&nbsp;-->
                     <a href="https://www.facebook.com/r2sgym" class="hvr-float"><i class="fa fa-facebook-square fa-4x" style="color:white"></i></a>
                    &nbsp;&nbsp;
                    <a href="http://www.twitter.com" class="hvr-float"><i class="fa fa-twitter-square fa-4x" style="color:white"></i></a>
                    &nbsp;&nbsp;
                     <a href="http://www.instagram.com" class="hvr-float"><i class="fa fa-instagram fa-4x" style="color:white"></i></a>
             
                    <font color="white"><p>R2S Trading</p>
                    <p>r2scservice@gmail.com</p>
                        <p>Copyright &copy; R2S 2015. All Right Reserved.</p></font>
                    <p><font size="2"><a href="terms">Terms and Conditions</a>&nbsp;&nbsp;<a href="privacy">Privacy Policy</a></font></p>
          
                    
           
     </div>
       </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!--Login/Logout with session -->

  <script type="text/javascript">
        var ifFalse = document.getElementById('show-if-false'),
            ifFalse1 = document.getElementById('show-if-false1'),
            ifTrue  = document.getElementById('show-if-true');
        var $session=("<?php echo $_SESSION['username']; ?>");
            if($session == 0) {
                 ifTrue.style.display = "block";
            }
            else{
                 ifFalse.style.display = "block";
                 ifFalse1.style.display = "block"
            }
</script>
</body>

</html>
