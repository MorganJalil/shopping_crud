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
 <?php 
    include ('../includes/navbar.php');
    //include ('../includes/products_from_db.php')
    $username = $_SESSION["username"];
    $statement = $pdo->prepare("SELECT customerbasket.id, customerbasket.user_id, customerbasket.username, customerbasket.product_name, 
    SUM(customerbasket.quantity) AS quantity, COUNT(quantity) AS momo FROM customerbasket WHERE username = :username GROUP BY user_id, product_name");
    
   

      $statement->execute(
          [
              ':username' => $username
          ]
        );

      $user_baskets = $statement->fetchAll(PDO::FETCH_ASSOC);?>
        <div class="col-9 card">
            <?php
            foreach($user_baskets as $single_basket): ?>
            <p><?= $single_basket["id"] ?></p>
            <p><?= $single_basket["product_name"] ?></p>
            <p><?= $single_basket["quantity"] ?></p>
            <!-- Delete row though id. -->
            <a href="../includes/delete.php?remove=<?=$single_basket['id']?>"> Ta bort </a>
            <hr>
 
            <?php endforeach; ?>
        </div>
</body>
</html>