<?php
$username='';
$password='';
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
	echo "Not connected";
}

if(isset($_POST['logins']))
{
	$username=mysqli_real_escape_string($db,$_POST["user"]);
	$password=mysqli_real_escape_string($db,$_POST["pass"]);
	$sql = "insert into login(user,pass) values('$username','$password')";
	if(mysqli_query($db,$sql))
	{
		echo "Inserted";
	}
	else {
 	echo "Not inserted";

}
}
else  if(isset($_POST['display']))
{
	$username=mysqli_real_escape_string($db,$_POST["user"]);
	$password=mysqli_real_escape_string($db,$_POST["pass"]);
	$sql = "select user,pass from login where user='$username' and pass='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "correct credentials";
		header('location:hi.php');
	}
	else {
		echo "Incorrect credentials";
	}
}
mysqli_close($db);
?>
<html>
<head>
	<title>kdfg</title>
</head>
<body>
	<form method="post">
		<input type="text" name="user"/><br/>
		<input type="password" name="pass"/>
		<input type="submit" name="logins"/>
		<input type="submit" name="display" value="display"/>
	</form>
</body>
</html>
