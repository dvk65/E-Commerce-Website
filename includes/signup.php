<?php
require 'common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bprac.css">
        <title>Forms in Bootstrap</title>
    </head>
    <body>
        <?php 
 include 'header.php';?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%;">
                            <h1>SIGN UP</h1>
                            <form action="signup_script.php" method="POST">
                        <div class="form-group"><label for="fname"></label>
                            <input type="text" class="form-control" name="fname" placeholder="Name"></div>
                        <div class="form-group"><label for="emails"></label>
                            <input type="email" class="form-control" id="exmail" placeholder="Enter E-mail" name="emailid"></div>
                        <div class="form-group"><label for="passwords"></label>
                            <input type="password" class="form-control" id="expass" placeholder="Password" name="pass"></div>
                            <div class="form-group"><label for="call"></label>
                            <input type="number" class="form-control" id="excall" placeholder="Contact" name="phone"></div>
                        <div class="form-group"><label for="city"></label>
                            <input type="text" class="form-control" id="excity" placeholder="City" name="city"></div>
                           <div class="form-group"><label for="exaddr"></label>
                            <input type="text" class="form-control" id="expaddr" placeholder="Address" name="exaddr"></div> 
                            <button class="btn btn-primary"><a href='products.php' style="color: #ffffff">Submit</a></button>
                    </form>
                        </div>
                    </div>
        </div>
        <?php
        include 'footer.php';
        ?>
                    <!--Enter your code here-->
    </body>
</html>



