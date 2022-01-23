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

if(isset($_REQUEST['courseSubmitBtn'])){
    //checking for empty fields
 if(($_REQUEST['course_name']=="") || ($_REQUEST['course_details']=="") || ($_REQUEST['course_author']=="") || ($_REQUEST['course_duration']=="") || ($_REQUEST['course_disprice']=="") || ($_REQUEST['course_price']=="")){

    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
 }

else{       
    $course_name = $_REQUEST['course_name'];
    $course_details=$_REQUEST['course_details'];
    $course_author=$_REQUEST['course_author'];
    $course_duration=$_REQUEST['course_duration'];
    $course_disprice=$_REQUEST['course_disprice'];
    $course_price=$_REQUEST['course_price'];
    $course_image=$_FILES['course_img']['name'];
    $course_image_temp=$_FILES['course_img']['tmp_name'];
    $img_folder='../image/'.$course_image;
    move_uploaded_file($course_image_temp,$img_folder);
    

    // sql query
    $sql="INSERT INTO course(course_name,course_details,course_author,course_image,course_duration,course_disprice,course_price) VALUES ('$course_name','$course_details','$course_author','$img_folder','$course_duration','$course_disprice','$course_price')";
    
if($conn->query($sql) == TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Congrates!! Course Added</div>'; 
}else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">SORRY!! Unable to Add new course</div>';
}

}
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Courses</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
</div>
<div class="form-group">
            <label for="course_details">Course Details</label>
            <input type="text" class="form-control" id="course_details" name="course_details">
</div>
<div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author">
</div>
<div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration">
</div>
<div class="form-group">
            <label for="course_details">Course Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price">
</div>
<div class="form-group">
            <label for="course_disprice">Course Discount Price</label>
            <input type="text" class="form-control" id="course_disprice" name="course_disprice">
</div>
<div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control" id="course_img" name="course_img">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success"
    id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
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