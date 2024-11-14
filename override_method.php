<h3>Override Method</h3>

<?php

class ParenClass {
    public function getInfo () {
        return "Parent Class";
    }
}

class Product extends ParenClass {
    public function getInfo() {
        return "Product Class";
    }
}

$product = new Product();
echo $product->getInfo();
?>