<?php
include_once 'model/ProductM.php';

switch ($action) {
    case '':
        $categories=getCategories();
        $manProducts = getManProducts();
        $grilProducts = getGirlProducts();
        include "view/home.php"; 
        break;
    
    
}