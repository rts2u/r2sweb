
<?php
    

    $item = $_GET['id'];
    

$con = mysql_connect("rts2ucom.ipagemysql.com","suriyan","nopassword");
       
mysql_select_db("item",$con);

session_start();



    $sql = "SELECT * FROM item_list WHERE Item_ID= '$item'";

    $product=mysql_query($sql,$con);
    $prod = mysql_fetch_array($product);
   
?>




<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	  <meta content="charset=utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" type="text/css" href="css/desctable.css" />
  <!-- Demo CSS -->
	
	<link rel="stylesheet" href="felxslider/flexslider.css" type="text/css" media="screen" />

  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <!--<link href='felxslider/tabulous.css' rel='stylesheet' type='text/css'>-->
	<!-- Modernizr -->
  <!--<script src="js/modernizr.js"></script>-->

  <!--tab-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<!--hover-->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>



<script type="text/javascript">
$(document).ready(function(){ 
    $("#myTab li:eq(1) a").tab('show');
});
</script>
<style type="text/css">
  .bs-example{
    margin: 20px;
  }

<style>
    #logo {
    position: absolute;
    }
   .footer {
    position:absolute;
    margin-top: auto bottom: 0;
    width: 100%;
    background: black;
    margin: 0;
    p.serif {
  font-family: Futura, 'Trebuchet MS', Arial, sans-serif;
}

    }
    </style>
    <title>Shop Homepage-<?php echo $prod['Item_Name'] ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>
 <body style="background-color:white">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--fbcomment-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                        <a href="#">FAQ</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="show-if-true" style="display: none">
                        <a href="login.php">Login/Register</a>                                  
                    </li>
                    <li id="show-if-false" style="display: none">
                       <a href="profile.php">My Profile</a>
                    </li>
                    <li id="show-if-false1" style="display: none">
                        <a href="logout.php">Logout</a>
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
            <div class="col-md-3">
                <p class="lead">
                <div class="list-group">
                    <a class="list-group-item active"><font size="4">Seller's Payment Details</font></a>
                    <a class="list-group-item"><font size="3">Seller's Name:<br> <strong> <?php echo $prod['Item_Seller']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Contact Avaibility:<strong><?php echo $prod['Item_SellAva']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Contact Number: <strong><?php echo $prod['Item_ContNum']?></strong></font></a>
                    </div>
                    <a class="list-group-item active"><font size="4">Sellers'Bank Account Details</font></a>
                    <a class="list-group-item"><font size="3">Account Holder Name:<br><strong> <?php echo $prod['Item_AccHoldername']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Bank Account Number:<br><strong> <?php echo $prod['Item_AccNum']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Secondary Account Holder Name:<br><strong> <?php echo $prod['Item_SecondaryAccHoldername']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Secondary Bank Account Number:<br><strong> <?php echo $prod['Item_SecondaryAccNum']?></strong></font></a>
                    <br>
                    <a class="list-group-item active"><font size="4">Shipment Fees</font></a>
                    <a class="list-group-item"><font size="3">Peninsular Malaysia:<br><strong><?php echo $prod['Item_Penin']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Sabah & Sarawak: <br><strong><?php echo $prod['Item_SSabah']?></strong></font></a>
                    <a class="list-group-item"><font size="3">Courier Delivery Service: <br><strong><?php echo $prod['Item_CDService']?></strong></font></a>
                    
                    <div><br><br>
          <div class="row">
<div id="ad"class="col-3" >

</script>
</div></div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1680758485788029"
     data-ad-slot="3611157904"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
   </div>
                </div>
          

	<div class="col-md-9" id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides"> 
          
            <li data-thumb="<?php echo $prod['image']?>" >
              <img src="<?php echo $prod['image']?>" height="850" width="200"/>
            </li>
            <li data-thumb="<?php echo $prod['image2']?>" >
              <img src="<?php echo $prod['image2']?>" height="850" width="200"/>
            </li>
            <li data-thumb="<?php echo $prod['image3']?>" >
              <img src="<?php echo $prod['image3']?>" height="850" width="200"/>
            </li>
            <li data-thumb="<?php echo $prod['image4']?>" >
              <img src="<?php echo $prod['image4']?>" height="850" width="200"/>
            </li>
          </ul>
        </div>
      </section>
       
                  
                <!--/col-->

    <!--<div  id="wrapper">-->
          <!-- Comments Form -->
             
<!--<div class="desctable" >
                <table >
                    <tr>
                        <td>
                            <h3><font family="Decorative"><font color="black"><strong>Product's Details and Description<font></h3>
                        </td>
                    </tr>
                    <tr>
                       <td border: 1px solid black; ><h3><p><p><font size= "9"><font face="Blagovest"><?php echo $prod['Item_Name'] ?>  RM<?php echo $prod['Item_Price'] ?></font></a></p></p></h3></td>
    
                    </tr>
                    <tr>
                        <td> 
      <p><p><strong><font size= "4"><font color= "black"><font face="verdana"><?php echo $prod['Item_Desc'] ?></font></font></strong></a></p></p></td>
   
                    </tr>
                    <!--<tr>
                        <td> 
      <p><p><strong><font size= "3"><?php echo $prod['Item_Date'] ?></font></strong></a></p></p></td>
   
                    </tr>
                </table>
            </div>-->
<!--</table>-->

<ul class="list-group ticketView">
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2.5" face="verdana">Name</font></span>
                          <p class="serif"><label><font size= "5.5"><?php echo $prod['Item_Name'] ?></font></label></p>
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2.5" face="verdana">Price</font></span>
                          <p class="serif"><label> <font size ="4">Start From : </font> <font size= "20">RM <?php echo $prod['Item_Price'] ?></font></label></p>
                      </li>  
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2.5" face="verdana">Descriptions</font></span><br>
                           <p class="serif"><font size= "4"><?php echo $prod['Item_Desc'] ?></font></p>
                      </li>
    
  <!--</div><!End tabs-->

    <div class="bs-example" class="col-md-9">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">Comment/Feedback</a></li>
        <!--<li><a data-toggle="tab" href="#sectionB">Comments</a></li>-->
        
    </ul>
    <div class="tab-content">
        <!--<div id="sectionA" class="tab-pane fade in active" >
                  <ul class="list-group ticketView">
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2">Name</font></span>
                          <label><font size= "4"> <?php echo $prod['Item_Name'] ?></font></label>
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2">Price</font></span>
                          <label><font size= "4"> RM<?php echo $prod['Item_Price'] ?></font></label>
                      </li>  
                      
                      <li class="list-group-item ticketView">
                          <span class="label label-default"><font size= "2">Descriptions</font></span><br>
                           <font size= "4"><?php echo $prod['Item_Desc'] ?>/<font>
                      </li>
                  </ul></div></div>-->
      <div id="sectionA" class="tab-pane fade in active">
            <h3></h3>
            <!-- Comments Form -->
                <div class="fb-comments" data-href="http://www.rts2u.com/r2s/items.php" data-numposts="10" data-colorscheme="light"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
</div>

   <footer class="footer">
     <br>
        <!-- Footer -->
        <!--<div class="fb-like-box col-sm-3 col-xs-6" data-href="https://www.facebook.com/r2sgym" data-  height="180" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>-->
         <div class="col-lg-6 col-lg-offset-3 text-center">
                
                  
                    <!--<a href="http://plus.google.com"><img src="pic/g+.png" height="30px"></a>&nbsp;&nbsp;-->
                     <a href="http://www.twitter.com" class="hvr-float"><i class="fa fa-facebook-square fa-4x" style="color:white"></i></a>
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
     </div>
    <!-- /.container -->


  

  <!-- jQuery -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script src="felxslider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<!--tab-->

<script type="text/javascript" src="felxslider/tabulous.js"></script>
<script type="text/javascript" src="felxslider/js.js"></script>

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
 
  <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


 

</body>
</html>