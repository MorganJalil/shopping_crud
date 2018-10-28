<?php
include 'database_connection.php';

/* 
1. fetch products from db.
2. check validate products from db
3. put products in SESSION after validation
*/


// Get products from database

$statement = $pdo->prepare("SELECT * FROM products ORDER BY id ASC");
// Execute populates the statement and runs it
$statement->execute();

$all_products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!--Loop out products from db into a bootstrap table -->
  <div class="container-fluid my-5">
    <div class="row">
        <?php
            $i=0;
            foreach($all_products as $single_product): ?>
                <div class='col-md-6'>
                    <div class="card">
                        <img class="card-img-top" alt="Card image cap" src="images/<?=$single_product["product_image"]; ?>"/>
                        <h4 class="card-title"><?=$single_product["product_name"]; ?></h4>
                        <h5><?=$single_product['price']?> $</h5>
                        <form method="POST" id="xx" action="includes/addtocart.php">
                            <h6>Qty: <input name="amount" type="number" min=0 value="<?php $single_product['unit_price']?>"></h6>
                            <input type="hidden" name="product_name" value="<?= $single_product['product_name'];?>">
                            <input type="hidden" name="unit_price" value="<?= $single_product['price'];?>">
                            <input type="submit" class="btn btn-success"/>
                        </form>
                    </div>
                </div>
            <?$i++;
            //use modulo to generate a new div row.
            if ($i % 2 == 0) {
            echo '</div><div class="row">';}?>
        <?php endforeach;?>
        <form form="xx" action="views/checkout.php" method="POST">
      <button class="btn btn-success" type="submit" value="lay_order" name="lay_order">Send le order</button>
    </form>
</div>


