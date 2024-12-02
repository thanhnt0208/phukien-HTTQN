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
    $sql = "SELECT * FROM product WHERE SEX = :nam LIMIT 8";
    $stmt = $conn->prepare($sql);
    $sex = 'nam';
    $stmt->bindParam(':nam', $sex);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getGirlProducts() {
    global $conn;
    $sql = "SELECT * FROM product WHERE SEX = :nu LIMIT 8";
    $stmt = $conn->prepare($sql);
    $sex = 'nu';
    $stmt->bindParam(':nu', $sex);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getAllGirlProducts() {
    global $conn;
    $sql = "SELECT * FROM product WHERE SEX = :nu";
    $stmt = $conn->prepare($sql);
    $sex = 'nu';
    $stmt->bindParam(':nu', $sex);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getAllMenProducts() {
    global $conn;
    $sql = "SELECT * FROM product WHERE SEX = :nam";
    $stmt = $conn->prepare($sql);
    $sex = 'nam';
    $stmt->bindParam(':nam', $sex);
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
    $stmt->bindValue(':limits', (int)$limits, PDO::PARAM_INT); 
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addProduct($title, $price, $image, $detail, $category_id) {
    global $conn;
    $sql = "INSERT INTO product(title, price, image, detail, Categories_id) 
            VALUES(:title, :price, :image, :detail, :Categories_id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':detail', $detail);
    $stmt->bindParam(':Categories_id', $category_id);
    $stmt->execute();
    return $conn->lastInsertId();
}


function updateProduct($id, $title, $price, $image, $detail, $category_id) {
    global $conn;
    $sql = "UPDATE product SET title = :title, price = :price, image = :image, detail = :detail, Categories_id = :Categories_id WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':detail', $detail);
    $stmt->bindParam(':Categories_id', $category_id);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function deleteProduct($id) {
    global $conn;  
    $sql = "DELETE FROM product WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}