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
    
    //loop out products laid in basket with logged in user
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
            
                        <h3 style="color:sandybrown"><?= $single_basket["product_name"]?></h3><br>
                        <h5>Qty: <?= $single_basket["quantity"]?></h5>
                        <h5>Price: <?= $single_basket["price"]?> $ each</h5><br>
                        Subtotal: <h5 style="color:mediumseagreen"><?=$single_basket["price"] * $single_basket["quantity"]?> $<h5>
        <!-- Delete row though id. -->
                        <a href="../includes/delete.php?remove=<?=$single_basket['id']?>"><button type="button" class="btn btn-info">Remove</button></a>
                        <hr>
                    <?php $sum += $single_basket["quantity"] * $single_basket["price"]?>
                <?php endforeach; ?>
                </div>
                <div class="col-8 card">
                User: <h6 style="color:sandybrown"><?=$_SESSION["username"]?></h6>
                Phone Number: <h6 style="color:sandybrown"><?=$_SESSION["phone_number"]?></h6>
                E-Mail: <h6 style="color:sandybrown"><?=$_SESSION["email"]?></h6><br>
                <h3 style="color:sandybrown">Total: <span style="color:black;"><?= $sum ?> $</span></h3>
                <a href="confirm.php"><button type="button" class="btn btn-success">Send order</button></a>
                </div>
            </div>
        </div>
</body>
</html>