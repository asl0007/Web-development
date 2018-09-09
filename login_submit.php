<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$encrypt_password = md5($password);
$select_query = "select id, email from users where email= '$email' and password= '$encrypt_password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ;
$total_rows_fetched = mysqli_num_rows($select_query_result);
if($total_rows_fetched==0){
    echo "no user with $email found";
}else{
    $row = mysqli_fetch_array($select_query_result);
}    
$_SESSION['email'] = $email;
$_SESSION['id']  = mysqli_insert_id($con);
header('location: products.php');
?>