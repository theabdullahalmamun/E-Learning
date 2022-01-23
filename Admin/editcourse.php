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
    if(($_REQUEST['course_name']=="") || ($_REQUEST['course_details']=="") || ($_REQUEST['course_author']=="") || ($_REQUEST['course_duration']=="") || ($_REQUEST['course_disprice']=="") || ($_REQUEST['course_price']=="")){

        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
     }
    
    else{
        $c_id = $_REQUEST['course_id'];
        $cname=$_REQUEST['course_name'];
        $cdetails=$_REQUEST['course_details'];
        $cauthor=$_REQUEST['course_author'];
        $cduration=$_REQUEST['course_duration'];
        $cdisprice=$_REQUEST['course_disprice'];
        $cprice=$_REQUEST['course_price'];
        $cimg='../image/'.$_FILES['course_img']['name'];
        
        
    
        // sql query
        $sql="UPDATE course SET course_id='$c_id',course_name='$cname',course_details='$cdetails',course_author='$cauthor',course_duration='$cduration',course_disprice='$cdisprice',course_price='$cprice',course_image='$cimg' WHERE course_id='$c_id'";
        
    if($conn->query($sql) == TRUE){
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Congrates!! Updated</div>'; 
    }else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Update</div>';
    }
    
    }
    }
    ?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course</h3>
    <?php
    if(isset($_REQUEST['view'])){
     $sql="SELECT * FROM course WHERE course_id={$_REQUEST['id']}";  
     $result= $conn->query($sql);
     $row=$result->fetch_assoc();

    }

    ?>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
            if(isset($row['course_id'])){
                echo $row['course_id'];
            }
            ?>" readonly>
</div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if(isset($row['course_name'])){
                echo $row['course_name'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_details">Course Details</label>
            <input type="text" class="form-control" id="course_details" name="course_details"value="<?php
            if(isset($row['course_details'])){
                echo $row['course_details'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author"
            value="<?php
            if(isset($row['course_author'])){
                echo $row['course_author'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration"value="<?php
            if(isset($row['course_duration'])){
                echo $row['course_duration'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_details">Course Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price"
            value="<?php
            if(isset($row['course_price'])){
                echo $row['course_price'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_disprice">Course Discount Price</label>
            <input type="text" class="form-control" id="course_disprice" name="course_disprice"
            value="<?php
            if(isset($row['course_disprice'])){
                echo $row['course_disprice'];
            }
            ?>">
</div>
<div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php
            if(isset($row['course_image'])){
                echo $row['course_image'];
            }
            ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control" id="course_img" name="course_img">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-danger"
    id="requpdate" name="requpdate">Update</button>
    <a href="courseadmin.php" class="btn btn-secondary"> Close</a>
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