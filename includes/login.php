<?php
require 'common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bprac.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-default" style="margin-top: 2%;">
                        <div class="panel-heading">
                            <h1>Enter your details</h1></div>
                        <div class="panel-body"><p class="text-warning">Login to make a purchase</p>
                            <form action="login_submit.php" method="POST">
                        <div class="form-group"><label for="emails">E-Mail</label>
                            <input type="email" class="form-control" id="exmail" placeholder="Enter email" name="emailid"></div>
                        <div class="form-group"><label for="passwords">Password</label>
                            <input type="password" class="form-control" id="expass" placeholder="Enter Password" name="pass"></div> 
                            <button class="btn btn-primary">Submit</button>
                            <?php
                            if(isset($_SESSION['{$exmail}'])){
                                include 'products.php';
                            }
                            else{
                                include 'signup.php';
                            }
?>
                            
                            
                    </form></div>
                        <div class="panel-footer">Don't have an account?<a href="signup.html">Register</a></div>
                    </div>
                </div>
                    <!--Enter your code here-->
            </div>
        </div>
        <?php
 include 'footer.php';
 ?>
    </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

