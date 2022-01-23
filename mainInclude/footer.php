<!--footer-->
<footer class=" bg-dark text-center p-0">
  <small class="text-white">Copyright &copy; 2021 || Design By E-Learning School<a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">  Admin Login</a></small>
</footer>
<!--studentreg_model-->
 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!--start student registration-->
<?php
include('studentregis.php');
?>
</div>
<div class="modal-footer">
  <span class="alert alert-scuccss"id="sMsg"></span>
  <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up
</button>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  
</div>
</div>
</div>
</div>
<!--End Student registration Form-->
<!--student login model-->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!--start student login form-->
 <form id="stulogform">

<div class="form-group">
  <i class="fas fa-envelope"></i><lebel for="stulogmail"
  class="pl-2 font-weight-bold">Email</lebel><input type="email"
  class="form-control" placeholder="Email"
  name="stulogmail" id="stulogmail">
  </div>
<div class="form-group">
  <i class="fas fa-key"></i><lebel for="stulogpass"
  class="pl-2 font-weight-bold">Password</lebel><input type="password"
  class="form-control" placeholder="Password"
  name="stulogpass" id="stulogpass">
  </div>
</form>
<!--End Student login Form-->

      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary"id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--end student login modal-->

<!-- Admin model-->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!--start Admin login form-->
 <form id="adminlogform">


<div class="form-group">
  <i class="fas fa-envelope"></i><lebel for="adminlogemail"
  class="pl-2 font-weight-bold">Email</lebel><input type="email"
  class="form-control" placeholder="Email"
  name="adminlogemail" id="adminlogemail">
  </div>
<div class="form-group">
  <i class="fas fa-key"></i><lebel for="adminlogpass"
  class="pl-2 font-weight-bold">Password</lebel><input type="password"
  class="form-control" placeholder="Password"
  name="adminlogpass" id="adminlogpass">
  </div>
</form>
<!--End ADMIN login Form-->

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary"id="adminLoginBtn"onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--end ADMIN login modal-->

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/all.min.js"></script> 
  <script src="js/owl.min.js"></script>

  <!--student Ajax-->
  <script type="text/javascript" src="js/ajaxrequest.js"></script>

  <!--Admin Ajax-->
  <script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>


