<?php
session_start();
include 'database_connection.php';



// validation for 

if(!isset($_POST['id'])) { 
  // check if the username has not been set
  header('Location: index.php?register_failed=true');
}else {
$_SESSION["id"] = $_POST["id"];
};

if(!isset($_POST['username'])) { 
    // check if the username has not been set
    header('Location: index.php?register_failed=true');
}else {
  $_SESSION["username"] = $_POST["username"];
};

if(!isset($_POST['product_name'])) { 
    // check if the password has not been set
    header('Location: index.php?register_failed=true');
}else {
  $_SESSION["product_name"] = $_POST["product_name"];
};

if(!isset($_POST['amount'])) { 
    // check if the phone_number has not been set
    header('Location: index.php?register_failed=true');
}else {
  $_SESSION["amount"] = $_POST["amount"];
};

if(!isset($_POST['unit_price'])) { 
    // check if the email has not been set
    header('Location: index.php?register_failed=true');
}else {
  $_SESSION["unit_price"] = $_POST["unit_price"];
};
?>

<?php
if(isset($_POST["amount"])){

  $statement1 = $pdo->prepare("INSERT INTO customer_basket
  (id, username, product_name, quantity, unit_price) VALUES (:id, :username, :product_name, :quantity, :unit_price)");
  $statement1->execute(
    [
      ":user_id" => $_SESSION["id"],
      ":username" => $_SESSION["username"],
      ":product_name" => $_SESSION["product_name"],
      ":quantity" => $_SESSION["amount"],
      ":price" => $_SESSION["unit_price"]
    ]
  );
}
header('location: ../index.php');
?>