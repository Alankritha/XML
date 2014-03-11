<?php
	
	//submit button 
	
	$submit = $_POST['submit'];
	
	//user details
	
	$fullname =strip_tags($_POST['fullname']);
	$email = strip_tags($_POST['email']);
	$username = strip_tags($_POST['usr']);
	$password = strip_tags($_POST['psw']);
	$repeatpassword = strip_tags($_POST['rpsw']);
	$address = strip_tags($_POST['addr']);
	
	if ($submit)
	{
		if($fullname && $email && $username && $password && $repeatpassword)
		{
					//check password match or not
					
					if($password == $repeatpassword)
					{
						//check char of username and full name
						
						if (strlen($username)>25 || strlen($fullname)>25)
						{
							echo "Length of username or full name should be less than 25 characters";
						}
						else
							
								if (strlen($password)>25 || strlen($password)<6)
								{
								
									echo "The Password characters must between 6 to 25 ";
								}
								
								else
									
								{
									//registration code*/
									
									$connect = mysql_connect("localhost","root","") or die ("we coudn't connect your server!");
									mysql_select_db("test") or die ("we coudn't find your db!");
									
									$query="INSERT INTO user_table(fullname,email,username,password,id,address) VALUES ('$fullname','$email','$username','$password','','$address')";
									$queryreg = mysql_query($query) or die (mysql_error());
									
									echo $fullname." You are Successfully Registered <a href='index2'.php>Return to Login page</a>";
								}	
						
					}
					else
					
						echo "The passwords you entered do not match!";
		}				
	
		else
		
			echo "please fill all requierd fileds!";
	
	}
?>

