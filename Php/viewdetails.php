<html>

<body>

<script type="text/javascript">


</script>

<?php

require('dbconnect.php');


$query = "SELECT * FROM user_table WHERE username='potus'";
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result))
{
if($_POST['usr']==$row['username'])
{
	if($_POST['psw']==trim($row['password']))
	{
	echo "welcome ".$row['fullname']; 
	echo "<br>You are from ".$row['address']; 
	}
	else
	{
	echo "The password is incorrect";
	include('login2.php');
	}
}
else
{
echo "The user does not exist";
include('login2.php');
}
}



?>

</body>

</html>
