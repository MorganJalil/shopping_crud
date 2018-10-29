<?php
/*Connect to database*/
$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

$pdo = new PDO(
      "mysql:host=localhost;dbname=onlineshop;charset=utf8",
      "root",
      "root",
      $options
);