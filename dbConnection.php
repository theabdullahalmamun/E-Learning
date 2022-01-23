<?php
$db_host="localhost";
$db_user="root";
$db_password= "";
$db_name="school_pr";




//connection
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);


// //connection check
// if($conn->connect_error){
//     die("Connetion Failed");
// }
// else{
//     echo "connected";
// }

?>