<?php
 
mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110")or die("cannot connect");
mysql_select_db("dblogin")or die("cannot select DB");


$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
$encrypted=md5($password);

$sql="SELECT * FROM login_member WHERE Member_Username='$username' and Member_Password='$encrypted'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
session_start();
$_SESSION['username']=$username;

header("location:ghome.php");
}
else {
echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='login.php'";
echo "</script>";

};

mysql_close;
?>
<table>
<tr>
	<form action="login.php" method="post">
		<td><input type="submit" name="backbtn" value="Back" /></td>
		</form>
</tr>
</table>