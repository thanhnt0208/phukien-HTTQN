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

function getiddmProducts($category_id) {
    global $conn;
    $sql = "SELECT * FROM product WHERE Category_id = :Category_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Category_id', $category_id);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}