<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$password = $_POST['$password'];
$new_password = $_POST['$new_password'];
$retype_password = $_POST['$retype_password'];
if ($new_password == $retype_password ){
    $update_query = "UPDATE users set password= '$new_password' where "
            . "password= '$password'";
    $update_query_result = mysqli_query($con, $update_query) or 
            die(mysqli_error($con));
    echo 'password changed';
    
}else{
    echo 'password not match';
    header('location: settings.php');
}
?>