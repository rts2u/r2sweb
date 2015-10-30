<?php
$name = $_POST["new_name"];
$email = $_POST["new_email"];
$phone = $_POST["new_phone"];
$address = $_POST["new_address"];
$city = $_POST["new_city"];


session_start();
$username=$_SESSION['username'];
$sql1=mysql_connect("localhost","root","")or die("cannot connect");
mysql_select_db("dblogin",$sql1)or die("cannot select DB");


mysql_query("UPDATE login_member SET 
				Member_Name='$name',
				Member_Email='$email', 
                Member_Phone='$phone',
				Member_Address='$address',
				Member_City='$city'
				WHERE Member_Username ='$username'"); 
			

		


mysql_query($sql1);
header("location:index.php");
mysql_close($sql1);

 																																																													
?>




 