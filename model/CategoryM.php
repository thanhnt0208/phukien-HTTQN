<?php
function getCategories(){
    global $conn;
    $sql="select * from categories";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $categories=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}