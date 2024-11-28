<?php
function getAllProducts(){
    global $conn;
    $sql = "SELECT * FROM product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getManProducts() {
    global $conn;
    $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 8";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getGirlProducts() {
    global $conn;
    $sql = "SELECT * FROM product ORDER BY id ASC LIMIT 8";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getProduct($id) {
    global $conn;
    $sql = "SELECT * FROM product WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    return $product;
}

function getiddmProducts($category_id) {
    global $conn;
    $sql = "SELECT * FROM product WHERE Categories_id = :Categories_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Categories_id', $category_id);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}