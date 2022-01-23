<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<!-- customcss-->
<link rel="stylesheet" href="css/style.css">
<title>E-Learning School</title>
</head>

<body>
    
<!---NAVIGATION-->
<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <div class="container-fluid">
    <!-- <img class="navbar-brand"href="index.php" src="./image/logEs.png"></img> -->
    <a class="navbar-brand text-white" href="index.php">E-School</a> 
    <span  class="navbar-text text-white font-weight-bold">Lern & Enjoy </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        
        <?php
        session_start();
        // print_r($_SESSION);
        if(!empty($_SESSION['is_login'])){
          echo'<li class="nav-item custom-nav-item">
          <a href="paymentstatus.php" class="nav-link" href="#">Payment Status</a>
        </li>
          <li class="nav-item custom-nav-item">
          <a class="nav-link" href="student/studentprof.php">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="logout.php">Logout</a><li class="nav-item custom-nav-item">
      </li>';
        }else{
         echo' <li>
            <a class="nav-link" href="#"data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a>
          </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Sign Up</a>
      </li>';
        }
        ?>
          
          <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Feedback</a>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        </li>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--End_NAv-->
