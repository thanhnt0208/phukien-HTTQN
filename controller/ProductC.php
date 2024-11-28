<?php
include_once "model/ProductM.php";

switch ($action) {
    case 'product':
        $products = getAllProducts();
        include 'view/adminsp.php';
        break;
    
    
}