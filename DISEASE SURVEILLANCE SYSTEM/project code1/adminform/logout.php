<?php 
session_start();
session_destroy();
echo "<script>window.open('../Login Page/login.php','_self')</script>";
?>