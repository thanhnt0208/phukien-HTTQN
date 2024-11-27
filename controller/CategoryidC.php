<?php 
include_once "model/ProductM.php";

switch ($action) {
    case 'Daychuyen':
        $category_id = $_GET['category_id'] ?? null;
        $iddmProducts = getiddmProducts($category_id);
        include "views/Daychuyen.php";
            
    case 'laptop':
        $category_id = $_GET['category_id'] ?? null;
        $iddmProducts = getiddmProducts($category_id);
        include "views/laptop.php";
    case 'samsung':
        $category_id = $_GET['category_id'] ?? null;
        $iddmProducts = getiddmProducts($category_id);
        include "views/samsung.php";
        break;
}