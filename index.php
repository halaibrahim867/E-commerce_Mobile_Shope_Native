<?php

    ob_start();
    include ('header.php');
?>


<?php
    //<!-- include banner area  -->

    include ('Template/_banner-area.php');


   // <!-- include top sale

    include ('Template/_top-sale.php');

   // <!-- include special price-->

    include ('Template/_special-price.php');

    //<!-- include banner ads-->

        include ('Template/_banner-ads.php');

    //<!-- include new phones -->

        include ('Template/_new-phones.php');

    //<!-- include blogs -->

        include ('Template/_blogs.php');


?>
<?php
//<!-- include footer -->
        include ('footer.php');

?>

