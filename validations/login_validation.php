<?php
session_start();
include '../includes/database_connection.php';
// Same value in both $_POST["username"] and $username

$username = $_POST["username"];
$password = $_POST["password"];

// No whitespace between $pdo and prepare
$statement = $pdo->prepare("SELECT * FROM users
  WHERE username = :username");
// Execute populates the statement and runs it
$statement->execute(
  [
    ":username" => $username
  ]
);
// When select is used, fetch must happen
$fetched_user = $statement->fetch();

// 3. Compare
$is_password_correct = password_verify($password, $fetched_user["password"]);
if($is_password_correct){
  // Save user globally to session
  $_SESSION["username"] = $fetched_user["username"];
  // Go back to frontpage
  header('Location: ../index.php');
} else {
  // Handle errors, go back to frontpage and populate $_GET
  header('Location: ../index.php?login_failed=true');
}
?>