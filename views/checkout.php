<?php
session_start();
?>

<?=



      $_SESSION["id"],
       $_SESSION["username"],
       $_SESSION["product_name"],
       $_SESSION["amount"],
       $_SESSION["price"]
        ?>

        <?php 
        var_dump($_SESSION["id"]);
        var_dump($username);
        var_dump($product_name);
        var_dump($amount);
        var_dump($price);

        ?>