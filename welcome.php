<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
     <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body background="./assests/bg.jpg">
    <nav class="navbar navbar-dark default-color justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="./assests/logo.png" height="50" margin="10" alt="ac logo">
        </a>
        <span class="navbar-text white-text">NookBook</span>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            
            <div class="form-group">
            <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
            </div>
        </form>
    </nav>
     <div class="container">
        <div class="row">
            <div  class="col-lg-10 ml-auto">
                <div class="card border-success mb-3" style="max-width: 180rem;">
                  <div class="card-header text-success bg-transparent border-success"><p ><h1 >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</div>
                  <div class="card-body text-success">
                     By opening an account with NookBook you owe Tom Nook 100,000 Bells<img src="./assests/bells.png" height="50" margin="10" alt="ac bell icon"></h1> <br></p>
                  </div>

                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-10 ml-auto">
            <img src="./assests/jjjjj.gif">
        </div>
        </div>
    </div>
    
    
    <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>