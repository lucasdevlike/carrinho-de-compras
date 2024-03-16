<?php
require 'Cart.php';
require 'Product.php';
session_start();


$products = [
    1 => ['id' => 1, 'name' => 'geladeira', 'price' => 1000, 'quantity' => 1],
    2 => ['id' => 2, 'name' => 'mouse', 'price' => 100, 'quantity' => 1],
    3 => ['id' => 3, 'name' => 'teclado', 'price' => 10, 'quantity' => 1],
    4 => ['id' => 4, 'name' => 'monitor', 'price' => 5000, 'quantity' => 1]
];

if (isset($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $productInfo = $products[$id];
    $product = new Product();
    $product->setId($productInfo['id']);
    $product->setName($productInfo['name']);
    $product->setPrice($productInfo['price']);
    $product->setQuantity($productInfo['quantity']);

    $cart = new Cart();
    $cart->add($product);
}
if (isset($_SESSION['cart'])) {

    var_dump($_SESSION['cart']);
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>Carrinho de Compras</h1>

    <p><a href="/mycart.php">Go to cart</a></p>
    <ul>
        <li>geladeira R$1.000,00<a href="?id=1">Adicionar ao Carrinho</a></li>
        <li>mouse $100,00<a href="?id=2">Adicionar ao Carrinho</a></li>
        <li>teclado $10,00<a href="?id=3">Adicionar ao Carrinho</a></li>
        <li>monitor R$5.000,00<a href="?id=4">Adicionar ao Carrinho</a></li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
</body>

</html>