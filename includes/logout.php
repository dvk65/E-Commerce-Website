<?php
require 'common.php';
session_start();
if(isset($_SESSION['id'])){
    session_unset();
    session_destroy();
    header('location:index.php');
}
else{
    header('location:index.php');
}
?>