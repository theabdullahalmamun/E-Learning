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
$adminEmail=$_SESSION['adminLogEmail'];
if(isset($_REQUEST['adminPassUpbtn'])){
    if(($_POST=['adminPass']=="")){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Enter Your New Password Please!!</div>';

    }else{
        print_r($_POST);
        $sql="SELECT * FROM admin WHERE admin_email='$adminEmail'";
        $result=$conn->query($sql);
        if($result->num_rows == 1){
            $adminPass=$_REQUEST['adminPass'];
            $sql="UPDATE admin SET admin_pass='$adminPass' WHERE admin_email='$adminEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated</div>';
            }else{
                $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
            }
        }

    }
}
?>
<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <lebel for="inputEmail">Email</lebel>
                    <input type="email" class="form-control"
                    id="inputEmail" value="<?php echo $adminEmail ?>" readonly>
</div>
        <div class="form-group">
                    <lebel for="inputnewpass">New Password</lebel>
                    <input type="text" class="form-control"
                    id="inputnewpass" placeholder="New Password" name="adminPass">
        </div>
<button type="submit" class="btn btn-success mr-4 mt-4" name="adminPassUpBtn">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>
<?php if(isset($passmsg)){
    echo $passmsg;
}?>
</form>
</div>
</div>
</div>

<?php
include('./admininclude/footeradmin.php');

?>