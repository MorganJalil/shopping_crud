<?php
session_start();
include '../includes/database_connection.php';

// backend validation.
if(!isset($_POST['username'])) { 
    // check if the username has not been set
    header('Location: index.php?register_failed=true');
}else {
    $username = $_POST["username"];
};

if(!isset($_POST['password'])) { 
    // check if the password has not been set
    header('Location: index.php?register_failed=true');
}else {
    $password = $_POST["password"];
};

if(!isset($_POST['phone_number'])) { 
    // check if the phone_number has not been set
    header('Location: index.php?register_failed=true');
}else {
    $phone_number = $_POST["phone_number"];
};

if(!isset($_POST['email'])) { 
    // check if the email has not been set
    header('Location: index.php?register_failed=true');
}else {
    $email = $_POST["email"];
};


// password_hash must always have two arguments
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// No whitespace between $pdo and prepare
$statement = $pdo->prepare("INSERT INTO users
  (username, password, phone_number, email ) VALUES (:username, :password, :phone_number, :email)");
// Execute populates the statement and runs it
$statement->execute(
  [
    ":username" => $username,
    ":password" => $hashed_password,
    ":phone_number" => $phone_number,
    ":email" => $email
  ]
);

header('Location: ../views/login.php');
?>