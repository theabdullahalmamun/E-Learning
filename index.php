<!--Start Header-->
<?php
include('./mainInclude/header.php');
?>
<!--End Header-->
<!-- vd bkng-->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/study.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content"> Welcome to E-School</h1>
    <small class="my-content"> Learn And Implement</small> <br>
    <?php 
   // session_start();
    if(!empty($_SESSION['is_login'])){
      echo'<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter"> Get Started</a>';
    }else{
      echo'<a href="student/studentprof.php" class="btn btn-success" data-bs-toggle="modal"> My Profile</a>';
    }
    ?>
  </div>
</div>
<!--text_foot_banner-->
 <div class="container-fluid bg-danger txt-banner">
   <div class="row bottom-banner">
     <div class="col-sm">
       <h5><i class="fas fa-book-open mr-6"></i> online course</h5>
     </div>
   <div class="col-sm">
     <h5><i class="fas fa-user mr-3"></i> Expart Instruction</h5>
   </div>
   <div class="col-sm">
  <h5><i class="fas fa-user mr-3"></i> Lifetime Access</h5>
   </div>
 </div>
</div>
<!--course card start-->
<div class="course_section">
<h1 class=" text-center"> Popular Course</h1>
<div class="box">
<div class="luk">
  <div class="card" style="width: 18rem;">
    <img height="190rem" src="image/pyth.jpg" class="card-img-top" alt="fstc">
    <div class="card-body">
      <h5 class="card-title">Pyhton A-Z</h5>
      <p class="card-text">Python is an interpreted high-level general-purpose programming language.</p>
      <a href="#" class="btn btn-primary">View</a>
      <div class="card-footer">
        <p class="card-text d-inline"> Price:<small><del> &#2547 2000</del></small> 
        <span class="font-weight-bolder">&#2547 1500<span></p> 
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
      </div>
      </div>
      </a>
    </div>
  </div>
  
<div class="luk">
<div class="card" style="width: 18rem;">
  <img height="190rem" src="image/c++.png" class="card-img-top" alt="cplus">
  <div class="card-body">
    <h5 class="card-title">C++</h5>
    <p class="card-text">C++ is a programming language created by Bjarne as an extension of the C programming language.</p>
    <a href="#" class="btn btn-primary">View</a>
    <div class="card-footer">
      <p class="card-text d-inline"> Price:<small><del> &#2547 10,000</del></small> 
      <span class="font-weight-bolder">&#2547 5,000<span></p> 
      <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
    </div>
    </a>
  </div>
</div>

<div class="luk">
<div class="card" style="width: 18rem;">
  <img height="190rem" src="image/pyth.jpg" class="card-img-top" alt="python">
  <div class="card-body">
    <h5 class="card-title">Advance Python</h5>
    <p class="card-text">Python is an interpreted high-level general-purpose programming language.</p>
    <a href="#" class="btn btn-primary">View</a>
    <div class="card-footer">
      <p class="card-text d-inline"> Price:<small><del> &#2547 8,000</del></small> 
      <span class="font-weight-bolder">&#2547 5,000<span></p> 
      <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
    </div>
    </div>
    </a>
  </div>
</div>

  </div>
  <!--course card end-->

<br>
</div>

<div class="text-center text-bottom m-2">
<br><br><br><br>
<a class="btn btn-danger btn-sm" href="courses.php"> More Courses</a>
</div>
<!--contact-->
<?php
include('./mainInclude/contact.php');
?>
<!--end contact-->
<!--feedbk-->
<div class="container-fluid mt5" style="background-color: #4B7289" id="Feedback">
<h1 class="text-center testyheading p-4">Student's Feedback </h1>
<div class="row">
<div class="col-md-12">
  <div id="testimonial-slider" class="owl-carousel">
    <div class="testimonial">
      <p class="description">
        hello, Good Course
</p>
<div class="pic">
  <img src="#" alt=""/>
</div>
<div class="testimonial-prof">
  <h4> Mahi</h4>
  <small> Web Developer</small>
</div>
</div>
</div>
</div>
</div>
</div>
<!--footer-->
<?php
include('./mainInclude/footer.php');
?>
<!--End footer-->