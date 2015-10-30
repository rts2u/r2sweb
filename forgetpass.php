<?php
$email = $_POST['email'];

$dbcon=mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110","dblogin")or die("cannot connect");
mysql_select_db("dblogin") or die("cannot select database");

$sql = "SELECT COUNT(*) AS count, Member_ID, Member_Username FROM login_member WHERE Member_Email='$email'";

$query = mysql_query($sql) or die ("Error reading from database");

$existing = mysql_fetch_array($query);
$u = $existing["Member_Username"];
$pic1='<img src=http://i.imgur.com/2fRbpbR.png/>';
if($existing['count'] > 0){
    
		$emailcut = substr($email, 0, 4);
		$randNum = rand(100000,999999);
		$tempPass = "$emailcut$randNum";
		$hashTempPass = md5($tempPass);
		$sql = "UPDATE login_member SET Member_Password='$hashTempPass' WHERE Member_Username='$u'";
	    $query = mysql_query($sql);
		$to = "$email";
		$from = "R2S@nonreply-r2s.com";
		$headers ="From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
		$subject ="R2S Temporary Password";
		$msg = ''.$pic1.'
                <h2>Hi '.$u.'</h2><p>This is an automated message from R2S</p>
                <p>You indicated that you forgot your login password. We generated a temporary password<br />for you to log in with, then once logged in you can change your password to anything you like.</p><p>Your new password to login is:<br /><br /><h2><b>'.$tempPass.'</b></h2></p>';
		      if(mail($to,$subject,$msg,$headers)) {
			echo "<script language=\"JavaScript\">\n";
            echo "alert('Email sent succesfully! You will received an email after a few minutes.');\n";
            echo "window.location='login.php'";
            echo "</script>";
			exit();
		} 
    } else {
 echo "<script language=\"JavaScript\">\n";
echo "alert('Email not registered');\n";
echo "window.location='login.php'";
echo "</script>";;
    }


?>