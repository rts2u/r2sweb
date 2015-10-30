<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    .footer {
    position:absolute;
    margin-top: auto bottom: 0;
    width: 100%;
    background: black;
    margin: 0;
    }</style>
    <title>R2S About</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!--hover-->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>

</head>

<body>
  

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
                        <a href="#">FAQ</a>
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
    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header> 
        <img class="img-responsive" hspace="0"
        src="pic/k.jpg" alt="">
    </header>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">About R2S</h1>
                    <p class="lead section-lead">R2S's mission is to bring the best products to our customers and make it universally and useful.</p>
                    <p class="section-paragraph">We always provide the best service as our humanly possibles to our customers.Eventhough we guaranteed a good service will be bring out, but we know that good just isn't enough, that is why we see "good" as a starting point not an end point. At this point, R2S set a target that we are not able to achieve at the moment, but by stretching it we will able to get further than what we expected at the first place.</p>
                    <p class="section-paragraph">  We want to leverage the best of R2S. For now R2S is just a small online shopping  and procurement service, but we are building a huge online shopping centre.If you'd like to contribute to our website,please open an issue at "Wishlist".  </p>
                </div>
            </div>
        </div>
    </section>

 
    <!-- Footer -->
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
