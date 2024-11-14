<h3>Method And Params</h3>

<?php

class Product {
    function getInfo($name, $price) {
        return "Name: ".$name. " Price: ".$price;
    }
}

$product = new Product();
echo $product->getInfo('Product 1', 100);
?>