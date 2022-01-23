<?php

// if(!isset($_SESSION)){
    session_start();
// }

include('./admininclude/headeradmin.php');
include('../dbConnection.php');


if(isset($_SESSION['is_admin_login'])){
$adminEmail=$_SESSION['adminLogEmail'];

}else{
    echo"<script> location.href='../index.php';</script>";
}
// print_r($_POST);
if(isset($_REQUEST['newStuSubmitBtn'])){
    
    //checking for empty fields
 if(($_POST['stu_name']=="") || ($_POST['stu_email']=="") || ($_POST['stu_pass']=="")){
// echo'hi';
    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
 }else{    


    $stu_name = $_POST['stu_name'];
    $stu_email=$_POST['stu_email'];
    $stu_pass=$_POST['stu_pass'];
    $stu_occ=$_POST['stu_occ'];
    

    // sql query
    $sql="INSERT INTO student (stu_name,stu_email,stu_pass,stu_occ) VALUES ('$stu_name','$stu_email','$stu_pass','$stu_occ')";
    echo'hello';
if($conn->query($sql) == TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Congrates!! New Student Added</div>'; 
}else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">SORRY!! Unable to Add new Student</div>';
}

}
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student Name*</label>
            <input type="text" class="form-control" name="stu_name" id="stu_name">
</div>
<div class="form-group">
            <label for="stu_email">Email*</label>
            <input type="text" class="form-control" name="stu_email" id="stu_email">
</div>
<div class="form-group">
            <label for="stu_pass">Password*</label>
            <input type="text" class="form-control" name="stu_pass" id="stu_pass">
</div>
<div class="form-group">
            <label for="stu_occ">Student Job Title</label>
            <input type="text" class="form-control" name="stu_occ" id="stu_occ">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success"
    name="newStuSubmitBtn" id="newStuSubmitBtn">Add</button>
    <a href="adminCstudent.php" class="btn btn-secondary"> Close</a>
</div>
<?php
if(isset($msg)){
echo $msg;
}
?>

</form>
</div>
<!-- div close from header -->
</div> 
 <!-- Container Fluid Close from Header -->
</div>


<?php
include('./admininclude/footeradmin.php');
?>