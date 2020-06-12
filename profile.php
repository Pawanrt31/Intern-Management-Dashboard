
<html>
    <head>
        <title>PROFILE INFO</title>

        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="dash_board.css">
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
                  <a class="nav-link" href="dash_board.html">Home <span class="sr-only">(current)</span></a>
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
                      <a class="dropdown-item" href="profile.php">Profile</a>
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

        <div class="container d-flex justify-content-center">

                    <div class="card rounded border border-primary" style="width: 28rem;">
                        <img src="user.jpeg" class="card-img-top" alt="Image_here">
                        <div class="card-body">
                          <h5 class="card-title" style="text-align:center"><b>Profile Information</b></h5>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                        <ul class="list-group list-group-flush">
                          <?php
                            session_start();
                            $username = $_SESSION['username'];
                            $db = mysqli_connect('localhost','root','','dash');
                            if(!$db)
                            {
                             echo "Not connected";
                            }
                            $sql="select name,username,email,address,phone from users where username='$username'";
                            $result=mysqli_query($db,$sql);
                            if(mysqli_num_rows($result)>0)
                            {
                              while($row=mysqli_fetch_assoc($result))
                              {
                          ?>
                          <li class="list-group-item"><pre><h5>Name     : <?php echo $row["name"]; ?></h5></pre></li>
                          <li class="list-group-item"><pre><h5>Username : <?php echo $row["username"]; ?></h5></pre></li>
                          <li class="list-group-item"><pre><h5>E-mail   : <?php echo $row["email"]; ?></h5></pre></li>
                          <li class="list-group-item"><pre><h5>Address  : <?php echo $row["address"]; ?></h5></pre></li>
                          <li class="list-group-item"><pre><h5>Phone    : <?php echo $row["phone"]; ?></h5></pre></li>
                        </ul>
                        <?php
                          }
                        }
                        ?>
                        <div class="card-body" style="margin-left:35%;">
                          <!-- <button style="align:center"><a href="#" class="card-link btn btn-outline-danger">exit</a></button> -->
                          <a href="dash_board.html"><input type="button" class="card-link btn btn-outline-danger btn-lg" value="exit"/></a>
                          <!-- <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>

        </div>
        <script src="jquery-3.5.1.min.js">

        </script>
        <script  src="bootstrap.js"></script>
    </body>
</html>
