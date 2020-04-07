<html>
    <head>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bprac.css">
    <meta charset="UTF-8">
    </head>
        <body>
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header"><a href="index.php" class="navbar-brand">Lifestyle Store</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar"><ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['logged_user'])){
                            ?>
                            <li><a href="cart.php"><span class="glyphicon glyphicon-cart"></span>Cart</a></li>
                            <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        <?php
                        }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign-up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        <?php
                        }
                        ?>
                    </ul>           
            </div>
                </div>
        </div>  
    </nav><!-- Add your code here -->
    
  </body>
</html>

