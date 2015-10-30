<?php
$pw1 = $_POST["oldpw"];
$pw = $_POST["newpw"];
$strongpw = md5($pw);
$oldpw = md5($pw1);

session_start();
$username=$_SESSION['username'];
$sql1=mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110")or die("cannot connect");
mysql_select_db("dblogin",$sql1)or die("cannot select DB");

$query = "SELECT COUNT(*) AS count FROM login_member WHERE Member_Username='$username' AND Member_Password='$oldpw'";
$results = mysql_query($query) or die ("Error reading from database");
$existing = mysql_fetch_array($results);
if ($existing['count'] > 0) {
mysql_query("UPDATE login_member SET 
				Member_Password='$strongpw'
				WHERE Member_Username ='$username' AND Member_Password ='$oldpw'"); 
			
echo "<script language=\"JavaScript\">\n";
echo "alert('Successfully changed new password');\n";
echo "window.location='profile_password.php'";
echo "</script>";
mysql_query($sql1);
}else{
		
echo "<script language=\"JavaScript\">\n";
echo "alert('Please enter the correct old password');\n";
echo "window.location='profile_password.php'";
echo "</script>";
}
mysql_close($sql1);

 																																																													
?>