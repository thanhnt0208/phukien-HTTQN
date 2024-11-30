<?php
function getCategories(){
    global $conn;
    $sql="select * from categories";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $categories=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}

function getCategory($id){
    global $conn;
    $sql = "SELECT * FROM categories WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $category = $stmt->fetch();
    return $category; 
}

function addCategory($name, $image){
    global $conn;
    $sql = "INSERT INTO categories(name,image) VALUES(:name, :image)";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':image',$image);
    $stmt->execute();
    return $conn->lastInsertId();
}


function updateCategory($id, $name, $image){
    global $conn;
    $sql = "UPDATE categories SET name = :name, image=:image WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}


function deleteCategory($id){
    global $conn;
    $sql= "update product set Categories_id = null where Categories_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $sql = "DELETE FROM categories WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}