<?php
session_start();
if(!isset($_POST['log']))
    header("location:login.php");
session_destroy();    
header("location:login.php");
?>