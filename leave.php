<?php
$subject='';
$description='';
$fromdate='';
$numdays=0;
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
 echo "Not connected";
}
if(isset($_POST['apply']))
{
	$subject=mysqli_real_escape_string($db,$_POST["subject"]);
  $fromdate=mysqli_real_escape_string($db,$_POST["fromdate"]);
  $numdays=mysqli_real_escape_string($db,$_POST["numdays"]);
	$description=mysqli_real_escape_string($db,$_POST["description"]);
  $sql = "insert into leaves(subject,fromdate,days,description) VALUES('$subject','$fromdate','$numdays','$description')";
	if(mysqli_query($db,$sql))
	{
		echo '<script>alert("Successful submission")</script>';
	}
	else {
 	echo "Not inserted";

}
}
mysqli_close($db);
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="dash_board.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body style="background-color: lightyellow;">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">INTERN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                 <a class="nav-link" href="dash_board.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
              </form>

              <div>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle" src="user.jpeg" alt="user">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Settings</a>
                      <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                      <a class="dropdown-item" href="interns_login.php">Logout</a>

                    </div>
                  </li>
                </ul>

              </div>

              <!-- <a href="#"><img class="rounded-circle" src="user.jpeg" alt="user"></a> -->
            </div>
        </nav>

        <div class="container d-flex justify-content-around">
            <!--<div class="card rounded" style="width: 18rem;">
                <img src="Task.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Alloted_Task</h5>
                  <p class="card-text">The list of all the tasks alloted along with a list of previous tasks.</p>
                  <a href="#" class="btn btn-primary">Alloted_Task</a>
                </div>
              </div>-->

              <div class="card rounded" style="width: 50rem;">
                <img src="Leave.jpg" class="card-img-top" alt="..." width="100px" height="300px">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center"><b>LEAVE APPLICATION</b></h5>
                  <form method="post">
                    <div class="form-group">
                      <label for="subject">Subject (Leave Type)</label>
                      <input type="text" class="form-control border border-primary"  id="Type" name="subject" />
                    </div>
                    <div class="form-group">
                      <label for="fordate">From (Date)</label>
                      <input type="date" class="form-control border border-primary"  id="From" name="fromdate" />
                    </div>
                    <div class="form-group">
                      <label for="todate">Number of days (Including from date)</label>
                      <input type="number" class="form-control border border-primary"  id="Num" name="numdays" />
                    </div>
                    <div class="form-group">
                      <label for="type">Description</label>
                      <input type="text" class="form-control border border-primary"  id="description" name="description" />
                    </div>

                  <input class="btn-align-center btn-lg btn-primary" type="submit" value="Apply" id="submit" name="apply" />
                </form>
                </div>
              </div>

              <!--<div class="card rounded" style="width: 18rem;">
                <img src="Leave.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leave Application</h5>
                  <p class="card-text">Quick and easy way to submit leave application.</p>
                  <a href="leave.php" class="btn btn-primary">Leave</a>
                </div>
              </div>-->
        </div>
        <script src="jquery-3.5.1.min.js">

        </script>
        <script  src="bootstrap.js"></script>
    </body>
</html>
