<?php
$server="localhost";
$username="root";
$password="";
$db="registration";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
	die("Connection failed" . mysqli_connect_error());
}

if(isset($_POST['button1']))
{
	$user=$_POST['name1'];
	$sc_i=$_POST['school1'];
	$address=$_POST['address1'];
	$pass=$_POST['password1'];
	$cpass=$_POST['cp1'];
	$email_id=$_POST['Email1'];
	$mob_num=$_POST['Phoneno1'];
	$dob=$_POST['dob1'];
	$gender=$_POST['gender'];
	$sql="INSERT INTO reg(user_name,password,address,school,email_id,mob_num,dob,gender) 
		  VALUES('$user','$pass','$address','$sc_i','$email_id','$mob_num','$dob','$gender')";
		  
	if(mysqli_query($conn,$sql))
	{
		echo("Inserted successfully");
	}
	else
	{
		echo("Error");
	}
}
mysqli_close($conn);

?>