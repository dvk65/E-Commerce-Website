<?php
require 'common.php';
$exmail=$_POST['emailid'];
$regex_email="/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $exmail)){
    header('location:index.php?email_error=enter correct e-mail');
}
$password=$_POST['pass'];
md5(md5($password));
if(strlen($password)<6){
    header('location:index.php?password_error=enter correct password');
}
$exmail= mysqli_real_escape_string($con, $exmail);
$password= mysqli_real_escape_string($con, $password);
$sqle='SELECT id FROM users WHERE emailid={$exmail}';
$sql_result= mysqli_query($con, $sqle);
if(mysqli_num_rows($sql_result)==0){
    header('location:signup.php');
}
else{
    $res= mysqli_fetch_array($sql,MYSQL_BOTH);
    $_SESSION['logged_user']=$sqle;
    header('location:products.php');
}
?>


