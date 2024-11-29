<?php
include_once "model/ProductM.php";

switch ($action) {
    case 'detail':
        $id = $_GET['id'] ?? null;
        $product = getProduct($id);

        if ($product) {
            $category_id = $product['Categories_id']; // Lấy danh mục của sản phẩm hiện tại
            $splienquan = $id; // Loại trừ sản phẩm hiện tại
            $related_products = getsplienquan($category_id, $splienquan);
        }
        include "view/product-detail.php";
        break;
}
