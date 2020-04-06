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
$name=$POST['fname'];
$cal=$POST['phone'];
$city=$POST['city'];
$addr=$POST['exaddr'];
$exmail= mysqli_real_escape_string($con, $exmail);
$password= mysqli_real_escape_string($con, $password);
$sql="SELECT id FROM users WHERE emailid={$exmail}";
$my_res= mysqli_query($con, $sql);
if(mysqli_num_rows($my_res)>0){
    echo 'Enter alternative email. This address is already taken.';
}
else{
    $sql_in="INSERT INTO users (fname,emailid,pass,phone,city,exaddr) VALUES ('$name','$exmail','$password','$cal','$city','$addr')";
    $sqli_in_res= mysqli_query($con, $sql_in) or die($con);
    $sqlin= mysqli_insert_id($con);
    $_SESSION['logged_user']=$sqlin;
    header('location:products.php');
}
?>



