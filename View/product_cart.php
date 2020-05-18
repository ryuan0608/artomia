<?php
    include_once "../Model/functions.php";
    include_once "partials/header.php";

    $cartItems = getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width">
     <!-- <link rel="stylesheet" href="css/styleguide.css"> -->
     <!-- <link rel="stylesheet" href="css/gridsystem.css"> -->
     <!-- <link rel="stylesheet" href="css/storetheme.css"> -->
     <!-- <link rel="stylesheet" href="css/select.css"> -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/select.js"></script>
    <script>
        setUpProductListPage();
    </script>
    <title>Artomia Gallery</title>
</head>
<body>
    <div class="xs-small md-medium" style="height: 1000px; width: 83.33%; margin: auto;  margin-top: 200px;">
        <?php
            for($i = 0; $i < count($cartItems); $i++) {
                $item = $cartItems[$i];
                echo "<div class='cart_item_lg'>" .
                        "<div class='cart_image_lg'><img class='thumbnail_lg' src='" . $item->image . "'/></div>" . 
                        "<div class='cart_info_lg'>" .
                            "<strong class='product_title_lg'>" . $item->name . "</strong><br>" .
                            "<label class='product_amount_lg'>" . "x" . $item->amount . "</label><br>" .
                            "<label class='product_subtotal_lg'>" . "$" . $item->total . "</label>" .
                        "</div>" .
                    "</div><hr>";
           }
        ?>
    </div>      
</body>

<footer><? include_once "partials/footer.php"; ?></footer>
</html>