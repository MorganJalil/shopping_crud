<?php
session_start();
include 'database_connection.php';

// validation for if username or submit not set

if(!isset($_POST['username'])) { 
  // check if the username has not been set
  header('Location: ../index.php?addproduct_failed=true');
};

if(!isset($_POST['submit'])) { 
  // check if the username has not been set
  header('Location: ../index.php?register_failed=true');
}else {

$_SESSION["product_name"] = $_POST["product_name"];
$_SESSION["amount"] = $_POST["amount"];
$_SESSION['unit_price'] = $_POST['unit_price'];
};

?>
// validation for if there is data in amont, do put in db and sessions
<?php
if(isset($_POST["amount"])){

  $statement = $pdo->prepare("INSERT INTO customerbasket
    (user_id, username, product_name, quantity, price) VALUES (:user_id, :username, :product_name, :quantity, :price)");
  $statement->execute(
    [
      ':user_id' => $_SESSION['id'],
      ':username' => $_SESSION["username"],
      ':product_name' => $_SESSION["product_name"],
      ':quantity' => $_SESSION['amount'],
      ':price' => $_SESSION['unit_price']
    ]
  );
}
header('location: ../index.php');
?>