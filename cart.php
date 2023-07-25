<?php
ob_start();
    include ('header.php');
?>


<?php
//include cart item if it is not empty
    count($product->getData('cart'))?include ('Template/_cart-template.php'): include ('Template/notFound/_cart-notFound.php');


// include new phone

count($product->getData('wishlist'))?include ('Template/_wishlist-template.php'): include ('Template/notFound/_wishlist-notFound.php');

include ('Template/_new-phones.php');


?>




<!-- include footer -->
<?php
include ('footer.php');

?>
<!-- !include footer  -->

