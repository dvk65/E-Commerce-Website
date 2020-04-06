<?php
require 'common.php';
function check_cart($con,$item_id,$user_id){
    $in_cart="SELECT id FROM user_product WHERE items_id='$items_id' AND user_id ='$user_id' and status='Added to cart'";
    $in_cart_res= mysqli_query($con, $in_cart);
    if(mysqli_num_rows($in_cart_res)>1){
        return 1;
    }
    else{
        return 0;
    }
}
?>


