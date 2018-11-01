<?php
session_start();
include 'database_connection.php';



if(isset($_GET['remove'])) {
$delete_product = $_GET['remove'];

$statement = $pdo->prepare("DELETE FROM customerbasket WHERE id = $delete_product");
  $statement->execute(
    [
      ':id' => $delete_product

    ]
  );

header('location: ../views/checkout.php');
}
?>