<?php

if(!isset($_POST['username'])) { 
    // check if the username has not been set
    $username = "";
}else {
    $username = $_POST["username"];
};

if(!isset($_POST['password'])) { 
    // check if the username has not been set
    $password = "";
}else {
    $password = $_POST["password"];
};

if(!isset($_POST['phone_number'])) { 
    // check if the username has not been set
    $phone_number = "";
}else {
    $phone_number = $_POST["phone_number"];
};

if(!isset($_POST['email'])) { 
    // check if the username has not been set
    $email = "";
}else {
    $email = $_POST["email"];
};

function formvalidation($_POST["username"]){


};




?>