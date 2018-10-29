<?php
session_start();
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
    include ('../includes/products_from_db.php')?>
</body>
</html>