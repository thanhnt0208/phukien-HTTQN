<?php
include 'model/ProductM.php';

switch ($action) {
    case '':
        $manProducts = getManProducts();
        $grilProducts = getGirlProducts();
        include "view/home.php"; 
        break;
    
    
}