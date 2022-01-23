<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/headeradmin.php');
include('../dbConnection.php');


if(isset($_SESSION['is_admin_login'])){
$adminEmail=$_SESSION['adminLogEmail'];

}else{
    echo"<script> location.href='../index.php';</script>";
}


// <!-- // Update -->
if(isset($_REQUEST['requpdate'])){
    if(($_REQUEST['stu_name']=="") || ($_REQUEST['stu_email']=="") || ($_REQUEST['stu_pass']=="")){

        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
     }
    
    else{
        $sid = $_REQUEST['stu_id'];
        $sname=$_REQUEST['stu_name'];
        $semail=$_REQUEST['stu_email'];
        $spass=$_REQUEST['stu_pass'];
        $socc=$_REQUEST['stu_occ'];
    
        // sql query
        $sql="UPDATE student SET stu_id='$sid',stu_name='$sname',stu_email='$semail',stu_pass='$spass',stu_occ='$socc' WHERE stu_id='$sid'";
        
    if($conn->query($sql) == TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Congrates!! Updated</div>'; 
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Update</div>';
    }
    
    }
    }
    ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    
    <?php
    if(isset($_REQUEST['view'])){
     $sql="SELECT * FROM student WHERE stu_id={$_REQUEST['id']}";  
     $result= $conn->query($sql);
     $row=$result->fetch_assoc();

    }

    ?>
    <h3 class="text-center"> Update Student Details</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_id">Student ID*</label>
            <input type="text" class="form-control" name="stu_id" id="stu_id" value="<?php if(isset($row['stu_id'])){ echo $row['stu_id'];}?>"readonly>
</div>
<div class="form-group">
            <label for="stu_name">Student Name*</label>
            <input type="text" class="form-control" name="stu_name" id="stu_name" value="<?php if(isset($row['stu_name'])){ echo $row['stu_name'];}?>">
</div>
<div class="form-group">
            <label for="stu_email">Email*</label>
            <input type="text" class="form-control" name="stu_email" id="stu_email" value="<?php if(isset($row['stu_email'])){ echo $row['stu_email'];}?>">
</div>
<div class="form-group">
            <label for="stu_pass">Password*</label>
            <input type="text" class="form-control" name="stu_pass" id="stu_pass" value="<?php if(isset($row['stu_pass'])){ echo $row['stu_pass'];}?>">
</div>
<div class="form-group">
            <label for="stu_occ">Student Job Title</label>
            <input type="text" class="form-control" name="stu_occ" id="stu_occ" value="<?php if(isset($row['stu_occ'])){ echo $row['stu_occ'];}?>">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success"
    name="requpdate" id="requpdate">Update</button>
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