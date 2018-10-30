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
    $statement = $pdo->prepare("SELECT customerbasket.id, customerbasket.user_id, customerbasket.username, customerbasket.product_name, customerbasket.quantity, 
        COUNT(customerbasket.quantity) AS QTY FROM customerbasket WHERE username = :username GROUP BY user_id, product_name");
    
      $statement->execute(
          [
              ':username' => $username
          ]
        );

      $users = $statement->fetchAll(PDO::FETCH_ASSOC);?>
        <div class="col-6 card">
            <?php
            foreach($users as $user): ?>
            <p><?= $user["product_name"] ?></p>
            <p><?= $user["quantity"] ?></p>
            <p><?= $user["quantity"] ?></p>
            <?php endforeach; ?>
        </div>
</body>
</html>