<?php 
include_once "model/ProductM.php";

switch ($action) {
    case 'iddm':
        $category_id = $_GET['Categories_id'] ?? null;
        $iddmProducts = getiddmProducts($category_id);
        include "view/iddm.php";
}