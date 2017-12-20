



<?php
if ( in_category('Menu Item') ) {
    include 'food.php';
} elseif ( in_category('coupon') ) {
    include 'coupon.php';
} else {
    // Continue with normal Loop

}
 ?>
