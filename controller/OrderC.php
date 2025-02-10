<?php
include_once 'model/OrderM.php'; 


switch ($action) {
    case 'success':
        include 'view/success.php';
    break;

    case 'history':
        include 'view/lichsumuahang.php';
    break;
}
?>
