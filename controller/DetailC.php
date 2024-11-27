<?php
include_once "model/ProductM.php";

switch ($action) {
    case 'detail':
        $products = getProduct($id);
        include "view/product-detail.php";
        break;
}
