<?php
session_start();
session_destroy();
// header("Location:home.php"); 
echo "<script>
window.location.href = 'index.php';</script>";

?>