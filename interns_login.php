<?php
session_start();
$username='';
$password='';
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
	echo "Not connected";
}

/*if(isset($_POST['logins']))
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
}*/
if(isset($_POST['logins']))
{
	$username=mysqli_real_escape_string($db,$_POST["user"]);
	$password=mysqli_real_escape_string($db,$_POST["pass"]);
	$sql = "select user,pass from login where user='$username' and pass='$password'";
	$_SESSION['username']=$username;
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0)
	{
		// echo 	'<script>alert("correct credentials")</script>';
		header('location:dash_board.html');
	}
	else {
		// echo "Incorrect credentials";
		echo '<script>alert("Incorrect")</script>';
	}
}
mysqli_close($db);
 ?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="interns_login.css">
	<!-- <script type="text/javascript" src="interns_login.js"></script> -->
</head>
<body>
	<div class="container justify-content-center">
		<div class="row">
			<div class="col-md-6 rounded">
				<div class="card" style="width: 40rem;">
				  <img src="welcome.jpg" class="card-img-top" alt="Img_here">
				  <div class="card-body">
				    <h5 class="card-title text-center">LOGIN</h5>
				  <!--   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
				  	<hr>

					  	<form method="post">
								<div class="form-group">
						    <label for="user">User name</label>
						    <input type="text" class="form-control border border-primary" id="user" name="user">
							</div>
							<div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control border border-primary" id="password" name="pass">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your user_name & password with anyone else.</small>
							</div>
						  <div class="form-group form-check d-flex justify-content-around">
						    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
						    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
						  	<input class="btn btn-lg btn-success" type="submit" value="LOGIN" id="submit" name="logins" />
								<!-- <input class="btn btn-lg btn-secondary" type="button" value="ADMIN"/> -->
						    <input type="reset" value="RESET" class="btn btn-lg btn-danger" /></button>
						  	<!-- <a href="#" class="btn btn-primary">cancel</a> -->
						    <!-- <a href="#" class="btn btn-primary">login</a> -->
						  </div>
						</form>
				  </div>
					<h6 class="text-center"><a href="admin_login.php" class="text-primary"><b>ADMIN</b></a></h6>
				</div>
			</div>
		</div>
	</div>
</body>
</html>




		<!-- <div class="card justify-content-center" style="width: 30rem;">
		  <img src="..." class="card-img-top" alt="Img_here">
		  <div class="card-body">
		    <h5 class="card-title">login</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div> -->
