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

function getsplienquan($category_id, $splienquan, $limits = 6){
    global $conn;
    $sql = "SELECT * FROM product WHERE Categories_id = :Categories_id AND id != :splienquan LIMIT :limits";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Categories_id', $category_id, PDO::PARAM_INT);
    $stmt->bindParam(':splienquan', $splienquan, PDO::PARAM_INT);
    $stmt->bindValue(':limits', (int)$limits, PDO::PARAM_INT); // Dùng bindValue để gán LIMIT
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}