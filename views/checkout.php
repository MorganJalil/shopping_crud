<?php
session_start();
include '../includes/database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php include ('../includes/head.php');
echo '<style>';
include '../css/style.css';
echo '</style>'; ?>
<body>
    <nav class="navbar navbar-expand-sm navbar-light sticky-top navbar-custom shadow py-0">
    <h1 class="navbar-brand mr-auto">Le Boutique</h1>
    <button class="btn btn-sm align-middle btn-default ml-auto mr-2 order-sm-last" type="button">
    <a href="../index.php"><span class="fa fa-home" aria-hidden="true"></a></span>
    </button>
    </nav>

 <?php 
    
    //include ('../includes/products_from_db.php')
    $username = $_SESSION["username"];
    $statement = $pdo->prepare("SELECT customerbasket.id, customerbasket.user_id, customerbasket.username, customerbasket.product_name, customerbasket.price,
    SUM(customerbasket.quantity) AS quantity, COUNT(quantity) AS momo FROM customerbasket WHERE username = :username GROUP BY user_id, product_name");
    
        $statement->execute(
            [
                ':username' => $username
            ]
        );

      $user_baskets = $statement->fetchAll(PDO::FETCH_ASSOC);?>
      <div class="container">
        <div class=row>
            <div class="col-8 card">
                <?php
                $sum=0;
                foreach($user_baskets as $single_basket): ?>
            
                    <h4 style="color:sandybrown"><?= $single_basket["product_name"]?></h4>
                    <h5>qty: <?= $single_basket["quantity"]?></h5>
                    <h5>Price: <?= $single_basket["price"]?> $</h5>
                    Subtotal: <h5 style="color:mediumseagreen"><?=$single_basket["price"] * $single_basket["quantity"]?> $<h5>
                    <!-- Delete row though id. -->
                    <a href="../includes/delete.php?remove=<?=$single_basket['id']?>"><button type="button" class="btn btn-info">Remove</button></a>
                    <hr>
                    <?php $sum += $single_basket["quantity"] * $single_basket["price"]?>
                <?php endforeach; ?>
            </div>
            <div class="col-8 card">
            <h5 style="color:sandybrown">Total: <span style="color:black;"><?= $sum ?> $</span></h5>
            <a href="confirm"><button type="button" class="btn btn-success">Send order</button></a>
            </div>
        </div>
</body>
</html>