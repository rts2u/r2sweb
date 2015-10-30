<?php

$name = $_POST["fullname"];
$email = $_POST["email"];
$number = $_POST["phone"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$username = $_POST["username"];
$password = $_POST["password"];

$encrypted=md5($password);

$sql1=mysql_connect("rts2ucom.ipagemysql.com","adminjs","js931110")or die("cannot connect");
mysql_select_db("dblogin")or die("cannot select DB");

$query = "SELECT COUNT(*) AS count FROM login_member WHERE Member_Username='$username' OR Member_Email='$email'";
$results = mysql_query($query) or die ("Error reading from database");
$existing = mysql_fetch_array($results);
 
if ($existing['count'] > 0) {
echo "<script language=\"JavaScript\">\n";
echo "alert('Duplicate Username or Email Address');\n";
echo "window.location='login.php'";
echo "</script>";;
}else {


 $sql = "INSERT INTO login_member(
                    Member_Name,
	                Member_Email,
                    Member_Phone,
             		Member_Address,
					Member_City,
					Member_Country,
					Member_Username,
					Member_Password,
                    Member_Profilepic,
					
                    Date
	          				 )
	            VALUES (
					'$name',
	                '$email',
                    '$number',
              		'$address',
					'$city',
					'$country',
					'$username',
					'$encrypted',
					'/pic/default.png',
				     NOW()
            )";

}

	mysql_query($sql, $sql1);
    mysql_close($sql1);

    header("Location: login.php");
    
	
	?>
