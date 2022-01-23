<?php
include_once('../dbConnection.php');
   // session_start();
include('./studentINC/stuhead.php');
include_once('../dbConnection.php');
if(isset($_SESSION['is_login'])){
    $stuEmail=$_SESSION['stuLogEmail'];
}else{
    echo"<script> location.href='../index.php';</script>";
}
$sql="SELECT * FROM student where stu_email='$stuEmail'";
$result=$conn->query($sql);
if($result->num_rows == 1){
    $row=$result->fetch_assoc();
    $stuId=$row["stu_id"];
    $stuName=$row["stu_name"];
    $stujob=$row["stu_occ"];
    $stuimg=$row["stu_img"];

}
if(isset($_REQUEST['updateStuNameBtn'])){
    if($_REQUEST['stuName']== ""){
      //error msg display
      $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';

    }else {
        $stuName=$_REQUEST["stuName"];
        $stujob=$_REQUEST["stu_occ"];
        $stu_image=$_FILES['stuImg']['name'];
        $stu_image_temp=$_FILES['stuImg']['tmp_name'];
        $img_folder='../image/stu/'.$stu_image;
        move_uploaded_file($stu_image_temp,$img_folder);
        $sql="UPDATE student SET stu_name='$stuName',stu_job='$stujob', stu_img='$img_folder' WHERE stu_email='$stuEmail'";


        if($conn->query($sql)==TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Congrates!! Updated </div>';
        }else{
            $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Sorry!! Unable to update :( </div>'; 
        }
    }
}
?>
<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lebel for="stuId">Student ID</lebel>
            <input type="text" class="form-control" id="stuId" name="stuId" value=" <?php if(isset($stuId)){echo $stuId;}?>" readonly>
        </div>
        <div class="form-group">
            <lebel for="stuEmail">Email</lebel>
            <input type="email" class="form-control" id="stuEmail"  value=" <?php echo $stuEmail ?>" readonly>
        </div>
        <div class="form-group">
            <lebel for="stuName">Name</lebel>
            <input type="text" class="form-control" id="stuName" name="stuName" value=" <?php if(isset($stuName)){echo $stuName;}?>">
        </div>
    <div class="form-group">

    <!-- lerner -->
    <lebel for="stujob">Occupation</lebel>
    <input type="text" class="form-control" id="stujob"
    name="stujob" value="<?php if(isset($stujob)){echo $stujob;}?>">
</div>
<div class="form-group">
    <lebel for="stuImg">Upload Image</lebel>
    <input type="file" class="form-control-file" id="stuImg" name="stuImg">
</div>
<button type="submit" class="btn btn-primary"
name="updateStuNameBtn">Upadete</button>
<?php if(isset($passmsg)) {echo $passmsg;}?>
</form>
</div>
</div>
<?php 
include('./studentINC/stufooter.php');
?>
