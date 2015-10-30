<?php


mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110")or die("cannot connect");
mysql_select_db("supp_feedback")or die("cannot select DB");


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$sql="INSERT INTO support(name, email, message)VALUES('$name', '$email', '$message')";
$result=mysql_query($sql);



echo "<script language=\"JavaScript\">\n";
echo "alert('Your Message Has Been Submitted.');\n";
echo "window.location='service.php'";
echo "</script>";





// close connection 
mysql_close();
?>