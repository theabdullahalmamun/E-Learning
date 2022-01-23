<!--header-->
<?php
include('./mainInclude/header.php');
?>
<!--End header-->
<!--start course page banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/paybann.jpg" alt="courses"
        style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
</div>
</div>
<!--Start Main Content-->
<div class="container">
    <h2 class="text-center my-4">Payment Status </h2>
    <form method="post" action="">
        <div class="form-group row">
            <lebel class="offset-sm-3 col-form-lebel"> Order ID: </lebel>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>
<!--End MAin Contetnt-->
<!--Include Contact.php-->
<div class="container">
<?php
include('./mainInclude/contact.php');
?>
</div> 
<!--Ending include-->

<!--footer-->
<?php
include('./mainInclude/footer.php');
?>
<!--End footer-->