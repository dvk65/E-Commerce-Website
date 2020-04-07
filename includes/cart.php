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
        <title>Cart</title>
    </head>
    <body>
    <?php
    include 'header.php';
if(isset($_SESSION['id'])){
    include 'header.php';
    $seid= session_id();
    $sqlq= mysqli_query('SELECT items FROM user_product WHERE user_id=$seid');
    mysqli_query('SELECT user.name, items.name FROM user INNER JOIN items ON user_product.user_id=$seid');
    if(mysqli_num_rows($sqld)==0){
        echo 'Add items!';
    }

 else {
     $sum=0;   
     while (mysqli_num_rows($sqld)!=0){
         $sump='SELECT price FROM items WHERE user_id=$seid';
         $sump_res= mysqli_query($con, $sump);
         $sum=$sum+$sump;
         $id=$id+1?>
         <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style="margin-top: 2%;">
                            <h1>YOUR CART</h1>
                    <form action='success.php' method='GET'>
                        <div class="form-group"><label for="id"><?php echo split($id, ',');
                        ?></label>
                            <input type="text" class="form-control" name="id"></div>
                            <div class="form-group"><label for="product"><?php                                                            
                            echo mysqli_query('SELECT names FROM items');?></label>
                                <input type="text" class="form-control" id="name" name="name"></div>
                                <div class="form-group"><label for="price"><?php                                                            
                            echo mysqli_query('SELECT price FROM items');?></label>
                                <input type="text" class="form-control" id="price" name="price"></div>
                         <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>
                    </form>
                        </div>
                    </div>
        </div>
        <?php           
        }
        echo 'Total={$sum}';?>
        <?php    while ($id=$seid);?><div class='btn btn-success'>Submit</div><?php
    }
}
?>
<?php
                include 'footer.php';
                ?>


    </body>
</html>


