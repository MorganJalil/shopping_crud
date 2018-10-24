<?php

include 'database_connection.php';

/* 
1. fetch products from db.
2. check validate products from db
3. put products in SESSION after validation
*/


// Get products from database
$product_name = "";
$statement = $pdo->prepare("SELECT * FROM products
  ORDER BY id ASC");
// Execute populates the statement and runs it
$statement->execute(
  [
    ":product_name" => $product_name
  ]
);

// If data is fetched, start doing session and foreach.
if($statement){
  // Save user globally to session
  ?>

  <div class="container-fluid">
    <div class="row">
        <?php
            $i=0;
            foreach($statement as $single_product): ?>
                <div class='col-md-6'>
                    <div class="card">
                        <img src="images/<?=$single_product["product_image"]; ?>"/>
                        <h4><?=$single_product["product_name"]; ?></h4>
                        <h5><?=$single_product['price']; ?> $</h5>
                        <h6>Qty: <input id= "quantity" name="<?=$single_product["quantity"]?>" type="number" min=0 form="checkout" value = 0></h6>
                    </div>
                </div>
            <?$i++;
            if ($i % 2 == 0) {
            echo '</div><div class="row">';}?>
        <?php endforeach;?>
        
</div>

<?php

$fetched_product = $statement->fetch();
$_SESSION["product_name"] = $single_product["product_name"];
$_SESSION["price"] = $fetched_product["price"];
$_SESSION["quantity"] = $fetched_product["quantity"];
$_SESSION["product_image"] = $single_product["product_image"];

 echo $_SESSION["product_name"]; 
 echo $_SESSION["price"];
 echo $_SESSION["quantity"];
 echo $_SESSION["product_image"];
 
  
} else {
  // Handle 
  echo 'booo';
}


?>
