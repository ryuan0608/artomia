<?
	include "../Model/functions.php";
	include "./partials/header.php";

	$cartItems = getCartItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit Store</title>
</head>
<body>
    <div class="container">
        <nav class="nav-crumbs" style="margin:1em 0">
            <ul>
                <li><a href="product_list.php">Back</a></li>
            </ul>
        </nav>
        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card flat">
                <?php
                	for($i = 0; $i < count($cartItems); $i++) {
                		echo "id: " . $cartItems[$i]->id;
                		echo "amount: " . $cartItems[$i]->amount;
                		echo "price: " . $cartItems[$i]->price;

                		echo "<br>";
                	}
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card flat">
                    
                    <div class="card-section">
                        <a href="product_checkout.php" class="form-button confirm">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<?
	include "./partials/footer.php";
?>
</html>