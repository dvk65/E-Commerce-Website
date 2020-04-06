<?php
require 'common.php';
?>
<?php
    if(isset($_SESSION['logged_user'])){
        header('location:products.php');
    }
    ?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/bprac.css">
</head>
    <body>
     <?php
     include 'header.php';
     ?>
    <div class="container"><div class="banner_image"><div class="img-wrapper">
        <img src="images/1.jpg" class="img-responsive" alt="camera" id="banner_image"><div class="img-overlay">
            <?php
            if(isset($_SESSION['logged_user'])){
                ?>
            <button class="btn btn-danger btn-lg active" id="banner_content" onclick="window.location.href='products.php';">Shop Now</button>
            <?php
            }else{
          ?>
              <button class="btn btn-danger btn-lg active" id="banner_content" onclick="window.location.href='login.php';">Shop Now</button> 
              <?php
            }
            ?>
            </div></div></div>
    <?php
             include 'footer.php';
    ?>
  </body>
</html>

