<?php
require 'common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="css/bprac.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <?php 
        include 'login_submit.php';
        ?>
        <div class="container" style="margin-top: 5%;"><div class="jumbotron"><h1>Welcome to our lifestyle store!</h1><p> We have the best cameras, watches and shirts for you. 
                    No need to hunt around, we have all in one place.</p></div></div>
        <div class="row text-center"><h3>Cameras</h3></div>
        <div class="container"><div class="row"><div class="col-md-3 col-sm-6"><a href="#" class="thumbnail">
                        <img src="images/2.jpg" alt="wassup"><div class="caption"><h4>Cannon EOS</h4></div>
                        <div>
                            <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                           
                            ?>
                        </div></a></div>
                <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/3.jpg" alt="wassup"><div class="caption">
                            <h4>Sony DSLR</h4></div><div>
                                <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                           <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div>
        <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/4.jpg" alt="wassup"><div class="caption">
                    <h4>Sony DSLR</h4></div><div>
                    <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?>
                </div></a></div>
            <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/5.jpg" alt="wassup"><div class="caption">
                        <h4>Ollympus DSLR</h4></div><div>
                        <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?>
                    </div></a></div></div></div>
        <div class="row text-center"><h3>Watches</h3></div>
        <div class="container"><div class="row"><div class="col-md-3 col-sm-6"><a href="#" class="thumbnail">
                        <img src="images/10.jpg" alt="wassup"><div class="caption"><h4>Titan Model #201</h4>
                        </div><div>
                            <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?>
                        </div></a></div>
                <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/7.jpg" alt="wassup"><div class="caption">
                            <h4>Titan Model #301</h4></div>
                        <div><?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div>
        <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/11.jpg" alt="wassup"><div class="caption"><h4>HMT Milan</h4>
                </div><div><?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div>
            <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/9.jpg" alt="wassup"><div class="caption"><h4>Faber Luba #111</h4></div>
                    <div>
                        <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?>
                    </div></a></div></div></div>    
    <div class="row text-center"><h3>Shirts</h3></div>
        <div class="container"><div class="row"><div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/6.jpg" alt="wassup">
                        <div class="caption"><h4>H&W</h4></div><div>
                            <?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?>
                        </div></a></div>
                <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/8.jpg" alt="wassup"><div class="caption"><h4>Luis Phill</h4></div>
                        <div><?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div>
        <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/14.jpg" alt="wassup"><div class="caption"><h4>John Zok</h4></div>
                <div><?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div>
            <div class="col-md-3 col-sm-6"><a href="#" class="thumbnail"><img src="images/13.jpg" alt="wassup"><div class="caption"><h4>Jhalsani</h4>
                    </div><div><?php
                            if(!isset($_SESSION['id'])){?><a href="login.php" role="button" class="btn btn-block btn-primary">Add to cart</a><?php}
                            else{if(check_cart(1)){?> 
                            <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a><?php} 
                            else {                                     
                            ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php                                 
                            }?>
                            }                            
                            ?></div></a></div></div></div>
    <?php
    include 'footer.php';?>    </body>
</html>

