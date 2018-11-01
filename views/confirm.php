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
    <nav class="navbar navbar-expand-sm navbar-light sticky-top navbar-custom shadow py-0">
    <h1 class="navbar-brand mr-auto">Le Boutique</h1>
    <button class="btn btn-sm align-middle btn-default ml-auto mr-2 order-sm-last" type="button">
    <a href="../index.php"><span class="fa fa-home" aria-hidden="true"></a></span>
    </button>
    </nav>

    <div class="container">
        <div class=row>
            <div class="col-6 card">
                User: <h6 style="color:sandybrown"><?=$_SESSION["username"]?></h6>
                Phone Number: <h6 style="color:sandybrown"><?=$_SESSION["phone_number"]?></h6>
                E-Mail: <h6 style="color:sandybrown"><?=$_SESSION["email"]?></h6><br>
                <strong>Thank you for ordering from our store!</strong><br>
                <a href="../validations/logout_validation.php"><button type="button" class="btn btn-info">Log out</button></a>
            </div>
        </div>
    </div>